<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Project;

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
}
