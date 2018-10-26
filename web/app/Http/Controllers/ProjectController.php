<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Project;
use App\Models\Activity;
use Webpatser\Uuid\Uuid;
use App\Http\Requests\StoreProjectRequest;

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
        $request->validated();
        $resultado = Project::create($request->except('_token'));
        if ($resultado->wasRecentlyCreated) {
            //Activity::registerActivityProyecto("hsdjahkdhsak");
            $activity = new Activity();
            $activity->document_id = "1";
            $activity->user_id = "1";
            $activity->description = "Mauricio ha creado el proyecto fhdjfhds el día 23 de octubre a las 17:15 horas";
            $activity->save();
            return redirect()->route('projects');
        }
    }

    public function findProjectById($id)
    {
        //
    }

    public function show($id)
    {
        if($id == null){
            // ...
        }
        $project = Project::find($id);
        if($project == null){
            // ...
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
