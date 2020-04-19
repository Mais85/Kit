<?php


namespace App\Repositories;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\AboutPage;
use Illuminate\Support\Str;


class AboutPageRepository extends AdminBaseController
{
    /**
     * Get data from aboutpage table
     * @return mixed
     */
    public function all()
    {
        return AboutPage::find(1);
    }

    /**
     * Create Aboutpage table data in db
     * @param $request
     * @return mixed
     */
    public function store($request)
    {
        return  AboutPage::create([
            'title1' => $this->getFormTranslations('title1',$request),
            'title2' => $this->getFormTranslations('title2',$request),
            'title3' => $this->getFormTranslations('title3',$request),
            'content1' =>$this->getFormTranslations('content1',$request),
            'content2' =>$this->getFormTranslations('content2',$request),
            'content3' =>$this->getFormTranslations('content3',$request),
            'desc1' =>$this->getFormTranslations('desc1',$request),
            'desc2' =>$this->getFormTranslations('desc2',$request),
            'desc3' =>$this->getFormTranslations('desc3',$request),
            'desc4' =>$this->getFormTranslations('desc4',$request),
            'smtxt1' =>$this->getFormTranslations('smtxt1',$request),
            'smtxt2' =>$this->getFormTranslations('smtxt2',$request),
            'smtxt3' =>$this->getFormTranslations('smtxt3',$request),
            'smtxt4' =>$this->getFormTranslations('smtxt4',$request),
            'img' =>$this->uploadImage($request->img,"photos"),
            'slug' => Str::slug('about us','-'),
        ]);
    }

    /**
     * Update Aboutpage table data in db
     * @param $items
     * @param $request
     * @return mixed
     */
    public function update($items,$request)
    {
        return $items->update([
                'title1' => $this->getFormTranslations('title1',$request),
                'title2' => $this->getFormTranslations('title2',$request),
                'title3' => $this->getFormTranslations('title3',$request),
                'content1' =>$this->getFormTranslations('content1',$request),
                'content2' =>$this->getFormTranslations('content2',$request),
                'content3' =>$this->getFormTranslations('content3',$request),
                'desc1' =>$this->getFormTranslations('desc1',$request),
                'desc2' =>$this->getFormTranslations('desc2',$request),
                'desc3' =>$this->getFormTranslations('desc3',$request),
                'desc4' =>$this->getFormTranslations('desc4',$request),
                'smtxt1' =>$this->getFormTranslations('smtxt1',$request),
                'smtxt2' =>$this->getFormTranslations('smtxt2',$request),
                'smtxt3' =>$this->getFormTranslations('smtxt3',$request),
                'smtxt4' =>$this->getFormTranslations('smtxt4',$request),
                'img' => $this->editImage($request->img,$items->img,$request->old_img,"photos"),
            ]
        );
    }
}
