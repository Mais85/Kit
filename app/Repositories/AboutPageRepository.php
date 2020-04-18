<?php


namespace App\Repositories;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\AboutPage;


class AboutPageRepository extends AdminBaseController
{

    public function all()
    {
        return AboutPage::find(1);
    }
}
