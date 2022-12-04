<?php

namespace App\Http\Controllers;

use App\project;
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
        abort_if(auth()->id() !== $project->owner_id,403);
        return view('projects.show', compact('project'));
    }

    public function store()
    {
        $attributes= request()->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        //Thay vì phải chỉ định id của owner,
        // $attributes['owner_id'] = auth()->id();

        //ta có thể sử dụng auth() để lấy id của user hiện tại mà không cần trỏ tới id
        auth()->user()->projects()->create($attributes);

        return redirect('/projects');
    }
}
