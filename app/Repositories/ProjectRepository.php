<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Project;
use Carbon\Carbon;
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

    public function getProject($slug,$id)
    {
        $data = cache('modProject');
        $item = $data->where('id',$id)->first();
        return $item;
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
            'catname' =>$this->getFormTranslations('catname',$request),
            'desc' =>$this->getFormTranslations('desc',$request),
            'value3' => $request->val3,
            'value4' => $request->val4,
            'value5' => $request->val5,
            'value6' => $request->val6,
            'info3' =>$this->getFormTranslations('info3',$request),
            'info4' =>$this->getFormTranslations('info4',$request),
            'info5' =>$this->getFormTranslations('info5',$request),
            'info6' =>$this->getFormTranslations('info6',$request),
            'phone' => $request->mobphone,
            'projectdate' => date('Y-m-d',strtotime($request->projectdate)),
            'email' => $request->email,
            'link' => $request->link,
            'img1' => $this->uploadImage($request->img1,'photos'),
            'img2' => $this->uploadImage($request->img2,'photos'),
            'smallimg' => $this->uploadImageFit($request->img1,"smallphotos",$this->__thumbs),
        ]);
    }

    public function update($request)
    {
        $item = cache('modProjectEdit');
        return $item->update([
            'slug'=> $this->getSlugFrom('title1',$request),
            'title1' =>$this->getFormTranslations('title1',$request),
            'title2' =>$this->getFormTranslations('title2',$request),
            'title3' =>$this->getFormTranslations('title3',$request),
            'title4' =>$this->getFormTranslations('title4',$request),
            'title5' =>$this->getFormTranslations('title5',$request),
            'title6' =>$this->getFormTranslations('title6',$request),
            'contents1' =>$this->getFormTranslations('contents1',$request),
            'contents2' =>$this->getFormTranslations('contents2',$request),
            'catname' =>$this->getFormTranslations('catname',$request),
            'desc' =>$this->getFormTranslations('desc',$request),
            'value3' => $request->val3,
            'value4' => $request->val4,
            'value5' => $request->val5,
            'value6' => $request->val6,
            'info3' =>$this->getFormTranslations('info3',$request),
            'info4' =>$this->getFormTranslations('info4',$request),
            'info5' =>$this->getFormTranslations('info5',$request),
            'info6' =>$this->getFormTranslations('info6',$request),
            'phone' => $request->mobphone,
            'projectdate' => date('Y-m-d',strtotime($request->projectdate)),
            'email' => $request->email,
            'link' => $request->link,
            'img1' => $this->editImage($request->img1,$item->img1,$request->old_img1,'photos'),
            'img2' => $this->editImage($request->img2,$item->img2,$request->old_img2,'photos'),
            'smallimg' => $this->editImageFit($request->img1,$item->smallimg,$request->old_img1,'smallphotos',$this->__thumbs),
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modProject');
            $deleted_item = $data->where('id',$item)->first();
            $filename1 = $deleted_item->img1;
            $filename2 = $deleted_item->img2;
            $filename3 = $deleted_item->smallimg;
            $pos = '/storage/photos/';
            $possmall = '/storage/smallphotos/';
            $filename1 = str_replace($pos, '', $filename1);
            $filename2 = str_replace($pos, '', $filename2);
            $filename3 = str_replace($possmall, '', $filename3);
            $deleted_item->delete();
            if($deleted_item){
                if($filename1 || $filename2 || $filename3){
                    $this->deleteImage($filename1,'photos');
                    $this->deleteImage($filename2,'photos');
                    $this->deleteImage($filename3,'smallphotos');
                }
            }
        }
    }
}
