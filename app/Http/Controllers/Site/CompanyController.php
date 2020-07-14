<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Repositories\Companyrepository;
use Illuminate\Http\Request;

class CompanyController extends HomeController
{
    /**
     * @var Companyrepository
     */
    private $companyrepository;

    /**
     * CompanyController constructor.
     * @param Companyrepository $companyrepository
     */
    public function __construct(Companyrepository $companyrepository)
    {
        $this->companyrepository = $companyrepository;
    }


    /**
     * Show companies index page
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $companies = $this->companyrepository->getBySort();
        $item = $companies->first();
        return view('site.companies',compact('companies','item'));
    }

    /**
     * @param $local
     * @param $slug
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($local, $slug,$id)
    {
        $item = $this->companyrepository->getWithSlug_Id($slug,$id);
        return view ('site.companies',compact('item'));
    }
}
