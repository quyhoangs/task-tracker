@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold underline">Task Managermant</h1>
    <ul >
        @forelse($projects as $project)
            <li>
                <a href="{{$project->path()}}">{{ $project->title }}</a>
            </li>
        @empty
            <li>Nothing show</li>
        @endforelse
    </ul>
@endsection
