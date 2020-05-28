<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Repositories\ReferanceRepository;
use App\Repositories\Test_RefRepository;
use App\Repositories\TestimonialsRepository;
use Illuminate\Http\Request;

class Tes_RefController extends HomeController
{

    /**
     * @var Test_RefRepository
     */
    private $tes_refRepository;

    /**
     * Tes_RefController constructor.
     * @param Test_RefRepository $tes_refRepository
     */
    public function __construct(Test_RefRepository $tes_refRepository)
    {
        $this->tes_refRepository = $tes_refRepository;
    }

    /** Display a listing of the resource.
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $Titems = $this->tes_refRepository->getTestimonAll();
        $Ritems = $this->tes_refRepository->getRefAll();
      return view('site.tes_ref',compact('Titems','Ritems'));
    }
}
