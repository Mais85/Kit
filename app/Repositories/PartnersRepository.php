<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Client;

class PartnersRepository extends  AdminBaseController
{
    public function getAll()
    {
        return Client::all();
    }

    public function getPaginate()
    {
        return Client::paginate(8);
    }
}
