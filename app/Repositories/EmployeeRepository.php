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


    public function getSortingModel()
    {
        return Employee::all()->sortBy('pos_number');
    }

    public function getFilteringModel($request)
    {
        $bigData = $this->getSortingModel();
        $temp = 0;
        foreach ($bigData as $elem){
            if ($elem->pos_number == $request->pos_number){
                $temp = $elem->pos_number+1;
                $elem->update([
                    'pos_number' =>$request->pos_number+1,
                ]);
            }elseif ($elem->pos_number == $temp){
                $temp = $elem->pos_number+1;
                $elem->update([
                    'pos_number' =>$temp,
                ]);
            }
        }
    }

    public function store($request)
    {
        $this->getFilteringModel($request);
        $username = $request->name.' '.$request->surname;
        $items = Employee::create([
            'slug'=>Str::slug($username,'-'),
            'name' => $request->name,
            'surname' => $request->surname,
            'company' =>$request->company,
            'position' =>$this->getFormTranslations('position',$request),
            'phone' => $request->phone,
            'pos_number' => $request->pos_number,
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
       // dd($request->all());
        $this->getFilteringModel($request);
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
            'pos_number' => $request->pos_number,
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
            $deleted_item->delete();
            if($deleted_item){
                if($filename)
                $this->deleteImage($filename,'photos');
            }
        }
    }
}
