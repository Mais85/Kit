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

    public function getEmployee($slug,$id)
    {
        $data = cache('empmod');
        $item = $data->where([['slug',$slug],['id',$id]])->get();
        dd($data,$item);
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
            'pdf' => $this->uploadFile($request->pdf,'files'),
            'img' => $this->uploadImage($request->img,"photos"),

        ]);

        if($items){
            return $items;
        }else{
            abort(404);
        }
    }
}
