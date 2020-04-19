<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\ProjectPage;

class ProjectPageRepository extends AdminBaseController
{

    public function all()
    {
        return ProjectPage::find(1);
    }

    public function store($request)
    {
        return ProjectPage::create([

        ]);
    }

    public function update($items, $request)
    {
            return $items->update([

            ]);
    }
}
