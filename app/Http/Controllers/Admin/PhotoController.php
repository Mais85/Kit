<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\AlbomRequest;
use App\Repositories\PhotoRepository;
use Illuminate\Http\Request;

class PhotoController extends AdminBaseController
{
    /**
     * @var PhotoRepository
     */
    private $photorepository;

    /**
     * PhotoController constructor.
     * @param PhotoRepository $photorepository
     */
    public function __construct(PhotoRepository $photorepository)
    {
        $this->photorepository = $photorepository;
    }

    /**
     * Store a newly created resource in storage with ajax.
     *
     * @param Request $request
     * @return array
     */

    public function store(Request $request)
    {
        $data = $this->photorepository->store($request);
        return $data;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->photorepository->update($request,$id);
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    /**
     *Remove the specified resource from storage.
     */
    public function delete()
    {
        $this->photorepository->delete();
    }

    /**
     * @param $id
     */
    public function delPhoto($id)
    {
        $this->photorepository->delPhoto($id);
    }

}
