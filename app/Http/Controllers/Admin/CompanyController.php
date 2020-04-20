<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Companycreaterequest;
use App\Repositories\Companyrepository;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * @var $companyrepository
     */
    private $companyrepository;

    public function __construct(Companyrepository $companyrepository)
    {
        $this->companyrepository = $companyrepository;
    }

    /**
     * Listing company datas from db
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Bütün Şirkətlər';
        $items = $this->companyrepository->paginate();
        cache(['compmod' => $items],3600*24);
        return view('admin.company.index',compact('title','items'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $title = "Şirkət Yarat";
        return view('admin.company.create',compact('title'));
    }

    public function store(Companycreaterequest $request)
    {
      $bvalidated = $request->validated();

      if($bvalidated){
            $this->companyrepository->store($request);
            return redirect('/admin/companies')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
      }else
          return redirect()->back()->withErrors($bvalidated)->withInput();
    }
}
