@extends('layouts.app')
@section('content')
<div class="flex justify-between items-center mb-5">
    <h2 class="text-gray-500 text-sm font-normal">My Project</h2>
    <a href="/project/create" class="button">New Project</a>
</div>

<div class="lg:flex lg:flex-wrap ">
    @forelse ($projects as $project)
    <div class="lg:w-1/3 px-3 pb-6">
        <div class="bg-white rounded-lg shadow p-5" style="height:200px">
            <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-300 pl-4">
                <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
            </h3>
            <div class="text-gray-700"> {{ \Illuminate\Support\Str::limit( $project->description ,100 ) }} </div>
        </div>
    </div>
    @empty
        <p>No projects yet.</p>
    @endforelse
</div>
@endsection
