<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreProjectRequest;
use App\Models\Activity;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all()->sortByDesc('id');
        return view('document.project.index')->with('projects', $projects);
    }

    public function create()
    {
        return view('document.project.create');
    }

    public function store(StoreProjectRequest $request)
    {   
        $project = new Project;
        if($project->existProyect($request->uuid, $request->name)){
            return;
        } 

        $request->validated();
        $resultado = Project::create($request->except('_token'));
        if ($resultado->wasRecentlyCreated) {
            Activity::registerActivityProyecto($request->uuid, $request->name);
            return redirect()->route('projects');
        }
    }

    public function findProjectById($id)
    {
        //
    }

    public function show($id)
    {
        if ($id == null) {
            // return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
        }
        $project = Project::where('uuid', $id)->first();
        if ($project == null) {
            //  return HttpNotFound();
        }
        return view('document.project.show')->with('project', $project);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
