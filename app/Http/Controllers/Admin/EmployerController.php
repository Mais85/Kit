<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\EmpcreateRequest;
use App\Repositories\EmployeeRepository;
use Illuminate\Http\Request;

class EmployerController extends AdminBaseController
{

    /**
     * @var EmployeeRepository
     */
    private $employeerepository;

    /**
     * EmployerController constructor.
     * @param EmployeeRepository $employeerepository
     */
    public function __construct(EmployeeRepository $employeerepository)
    {
        $this->employeerepository = $employeerepository;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     *
     */
    public function index()
    {

        $title = "Bütün İşçilər";
        $items = $this->employeerepository->getpaginate();
        cache(['empmod'=> $items],3600*24);
        return view ('admin.employee.index',compact('title','items'));
    }

    /**
     * Create employee
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $title = "İşçi Yarat";
        $companies = $this->employeerepository->getCompanylist();
        return view('admin.employee.create',compact('title','companies'));
    }

    public function store(EmpcreateRequest $request)
    {
        $bvalidated = $request->validated();

        if($bvalidated){
            $this->employeerepository->store($request);
            return redirect('/admin/employers')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }

    public function edit ($slug,$id)
    {
        $title = 'İşçi redaktəsi';
        $item = $this->employeerepository->getEmployee($slug,$id);
        return view('admin.employee.edit',compact('title','item'));
    }
}
