<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Repositories\Companyrepository;
use Illuminate\Http\Request;

class CompanyController extends HomeController
{
    private $companyrepository;

    public function __construct(Companyrepository $companyrepository)
    {
        $this->companyrepository = $companyrepository;
    }


    public function show($local, $slug,$id)
    {
        $item = $this->companyrepository->getWithSlug_Id($slug,$id);
        return view ('site.companies',compact('item'));
    }
}
