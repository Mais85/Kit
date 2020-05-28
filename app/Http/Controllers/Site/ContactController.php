<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class ContactController extends HomeController
{
    /** Display a listing of the resource.
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function index()
    {

       return view('site.contact');
    }
}
