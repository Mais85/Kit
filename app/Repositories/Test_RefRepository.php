<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Referance;
use App\Models\Testimonial;


class Test_RefRepository extends AdminBaseController
{
    public function getRefAll()
    {
        return Referance::all();
    }

    public function getTestimonAll()
    {
        return Testimonial::all();
    }
}
