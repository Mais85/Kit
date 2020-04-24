<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Str;

class EmployeeRepository extends AdminBaseController
{

    public function getAll()
    {
        return Employee::all();
    }

    public function getpaginate()
    {
        return Employee::paginate(8);
    }

    public function getCompanylist()
    {
        return Company::all()->pluck('company','id');
    }

    public function getEmployee($slug)
    {
        $data = cache('empmod');
        $item = $data->where('slug',$slug)->first();
        return $item;
    }

    public function store($request)
    {
        $username = $request->name.' '.$request->surname;
        $items = Employee::create([
            'slug'=>Str::slug($username,'-'),
            'name' => $request->name,
            'surname' => $request->surname,
            'company' =>$request->company,
            'position' =>$this->getFormTranslations('position',$request),
            'phone' => $request->phone,
            'mobphone' => $request->mobphone,
            'email' => $request->email,
            'fb' => $request->fb,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'img' => $this->uploadImage($request->img,"photos"),

        ]);

        if($items){
            return $items;
        }else{
            abort(404);
        }
    }

    public function update($request)
    {
        $item = cache('modEmpEdit');
        $username = $request->name.' '.$request->surname;
        return $item->update([
            'slug'=>Str::slug($username,'-'),
            'name' => $request->name,
            'surname' => $request->surname,
            'company' =>$request->company,
            'position' =>$this->getFormTranslations('position',$request),
            'phone' => $request->phone,
            'mobphone' => $request->mobphone,
            'email' => $request->email,
            'fb' => $request->fb,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'img' => $this->editImage($request->img,$item->img,$request->old_img,"photos"),
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('empmod');
            $deleted_item = $data->where('id',$item)->first();
            $filename = $deleted_item->img;
            $pos = '/storage/photos/';
            $filename = str_replace($pos, '', $filename);
            $filepdf = $deleted_item->pdf;
            $deleted_item->delete();
            if($deleted_item){
                if($filename)
                $this->deleteImage($filename);
            }
        }
    }
}
