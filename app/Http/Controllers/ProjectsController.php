<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }

    public function store()
    {
        $attributes= request()->validate([
            'title'=>'required',
            'description'=>'required',
            'notes'=>'min:3'
        ]);
        //Thay vì phải chỉ định id của owner,
        // $attributes['owner_id'] = auth()->id();

        //ta có thể sử dụng auth() để lấy id của user hiện tại mà không cần trỏ tới id
        $project = auth()->user()->projects()->create($attributes);

        return redirect($project->path());
    }

    public function update(Project $project){

        $this->authorize('update', $project);

        $project->update(request(['notes']));

        return redirect($project->path());
    }

    public function create()
    {
        return view('projects.create');
    }
}
