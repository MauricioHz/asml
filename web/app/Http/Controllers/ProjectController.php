<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Project;
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
            return redirect()->route('projects');
        }
    }

    public function findProjectById($id)
    {
        //
    }

    public function show($id)
    {
        //
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
