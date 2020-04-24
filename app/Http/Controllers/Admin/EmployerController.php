<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\EmpcreateRequest;
use App\Http\Requests\EmpupdateRequest;
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

    public function edit ($slug)
    {
        $title = 'İşçi redaktəsi';
        $items = $this->employeerepository->getEmployee($slug);
        $companies = $this->employeerepository->getCompanylist();
        cache(['modEmpEdit' => $items],3600*24);
        return view('admin.employee.edit',compact('title','items','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmpcreateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param EmpupdateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(EmpupdateRequest $request)
    {
         $bvalidated = $request->validated();
        if($bvalidated){
            $this->employeerepository->update($request);
            return redirect('/admin/employers')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }


    /**
     * Deelete employers table  from db and storage
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     */
    public function destroy($id)
    {
        $this->employeerepository->destroy($id);
        return redirect('/admin/employers')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
