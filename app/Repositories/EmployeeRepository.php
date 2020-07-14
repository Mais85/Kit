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
        return Employee::orderby('pos_number')->paginate(8);
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

    public function getFilteringModel($request,$pos=null)
    {
        $bigData = $this->getSortingModel();
        $temp = 0;
        foreach ($bigData as $elem){
            if($pos == null || $request->pos_number < $pos){
                if ($elem->pos_number == $request->pos_number){
                    $temp = $elem->pos_number+1;
                    $elem->update([
                        'pos_number' =>$request->pos_number+1,
                    ]);
                }elseif ($elem->pos_number== $pos){
                    break;
                } elseif ($elem->pos_number === $temp){
                    $temp = $elem->pos_number+1;
                    $elem->update([
                        'pos_number' =>$temp,
                    ]);
                }
            }else{
                if($elem->pos_number == $pos){
                    $temp = $pos;
                    continue;
                }elseif($elem->pos_number > $request->pos_number){
                   break;
                }elseif($elem->pos_number > $pos){
                    $elem->update([
                        'pos_number' =>$elem->pos_number-1,
                    ]);
                }
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
        $item = cache('modEmpEdit');
        if($request->pos_number != $item->pos_number){
            $this->getFilteringModel($request,$item->pos_number);
        }

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

    public function filterAfterDestroying($pos)
    {
        $data =  $this->getSortingModel();
        $temp =null;
        foreach ($data as $val ){
            if($val->pos_number > $pos){
                $val->update([
                    'pos_number' => $val->pos_number - 1,
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('empmod');
            $deleted_item = $data->where('id',$item)->first();
            $poss = $deleted_item->pos_number;
            $this->filterAfterDestroying($poss);
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
