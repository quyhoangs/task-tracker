@extends('layouts.app')
@section('content')
<div class="flex justify-between items-end mb-5">
    <h2 class="text-muted text-base font-light">My Projects</h2>
    <a href="/projects/create" class="button">New Project</a>
</div>

<div class="lg:flex lg:flex-wrap ">
    @forelse ($projects as $project)
    <div class="lg:w-1/3 px-3 pb-6">
        @include ('projects.card')
    </div>
    @empty
        <p>No projects yet.</p>
    @endforelse
</div>
@endsection
