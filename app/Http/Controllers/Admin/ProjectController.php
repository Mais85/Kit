<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\ProjectCreateRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends AdminBaseController
{

    private $projectrepository;

    public function __construct(ProjectRepository $projectrepository)
    {
        $this->projectrepository = $projectrepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Bütün Layihələr';
        $items = $this->projectrepository->getPaginate();
        cache(['modProject' => $items], 3600 * 24);
        return view('admin.project.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $title = 'Layihə Yarat';
        return view('admin.project.create')->with(['title' => $title]);
    }

    public function store(ProjectCreateRequest $request)
    {
        $bvalidated = $request->validated();

        if ($bvalidated) {
            $this->projectrepository->store($request);
            return redirect('/admin/projects')->with('message', 'Yaradılma əməliyyatı uğurla başa çatdı.');
        } else {
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $slug
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function edit($slug,$id)
    {
        $title = 'Layihə redaktəsi';
        $items = $this->projectrepository->getProject($slug,$id);
        cache(['modProjectEdit' => $items],3600*24);
        return view ('admin.project.edit',compact('title','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update (ProjectUpdateRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->projectrepository->update($request);
            return redirect('/admin/projects')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->projectrepository->destroy($id);
        return redirect('/admin/projects')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
