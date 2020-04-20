<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\ProjectPage;
use Illuminate\Support\Str;

class ProjectPageRepository extends AdminBaseController
{

    public function all()
    {
        return ProjectPage::find(2);
    }

    public function store($request)
    {
        return ProjectPage::create([
            'contents' => $this->getFormTranslations('contents',$request),
            'slug' => Str::slug('projects','-'),
        ]);
    }

    public function update($items, $request)
    {
            return $items->update([
                'contents' =>$this->getFormTranslations('contents',$request),
                'slug' => Str::slug('projects','-'),
            ]);
    }
}
