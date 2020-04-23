<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Companycreaterequest;
use App\Http\Requests\Companyupdaterequest;
use App\Models\Company;
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

    /**
     * Creeta new company data in db
     * @param Companycreaterequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Companycreaterequest $request)
    {
      $bvalidated = $request->validated();

      if($bvalidated){
            $this->companyrepository->store($request);
          return redirect('/admin/companies')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
      }else
          return redirect()->back()->withErrors($bvalidated)->withInput();
    }


    /**
     * edit page company data
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function edit($slug)
    {
        $title = "Şirkət Redaktəsi";
        $items = $this->companyrepository->getWithSlug($slug);
        cache(['modCompEdit' => $items],3600*24);
        return view('admin.company.edit',compact('title','items'));
    }

    public function update(Companyupdaterequest $request,$slug)
    {
        $bvalidated = $request->validated();

        if($bvalidated){
            $this->companyrepository->update($request, $slug);
            return redirect('/admin/companies')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
        }else{
            abort(404);
        }

    }

    /**
     * Deelete company items from db and storage
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     */
    public function destroy($id)
    {
       $this->companyrepository->destroy($id);
        return redirect('/admin/companies')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
