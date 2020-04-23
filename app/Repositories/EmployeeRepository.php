<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Company;
use App\Models\Employee;

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
}
