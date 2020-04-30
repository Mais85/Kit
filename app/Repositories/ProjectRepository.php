<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectRepository extends AdminBaseController
{
    public function getAll()
    {
        return Project::all();
    }

    public function getPaginate()
    {
        return Project::paginate(8);
    }

    private function getSlugFrom($name, $request)
    {
        $slug = $this->getFormTranslations($name,$request);
        foreach ($slug as &$item){
            $item = Str::slug($item,'-');
        }
        return $slug;
    }

    public function store($request)
    {
        return Project::create([
            'slug'=> $this->getSlugFrom('title1',$request),
            'title1' =>$this->getFormTranslations('title1',$request),
            'title2' =>$this->getFormTranslations('title2',$request),
            'title3' =>$this->getFormTranslations('title3',$request),
            'title4' =>$this->getFormTranslations('title4',$request),
            'title5' =>$this->getFormTranslations('title5',$request),
            'title6' =>$this->getFormTranslations('title6',$request),
            'contents1' =>$this->getFormTranslations('contents1',$request),
            'contents2' =>$this->getFormTranslations('contents2',$request),
            'catname' =>$this->getFormTranslations('contents2',$request),
            'desc' =>$this->getFormTranslations('desc',$request),
            'info3' => $request->info3,
            'info4' => $request->info4,
            'info5' => $request->info5,
            'info6' => $request->info6,
            'value3' =>$this->getFormTranslations('value3',$request),
            'value4' =>$this->getFormTranslations('value4',$request),
            'value5' =>$this->getFormTranslations('value5',$request),
            'value6' =>$this->getFormTranslations('value6',$request),
            'phone' => $request->mobphone,
            'projectdate' => $request->projectdate,
            'email' => $request->email,
            'link' => $request->link,
            'img1' => $this->uploadImage($request->img1,'photos'),
            'img2' => $this->uploadImage($request->img2,'photos'),
            'smallimg' => $this->uploadImageFit($request->img,"smallphotos",$this->__thumbs),
        ]);
    }
}
