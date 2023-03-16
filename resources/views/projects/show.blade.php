@extends ('layouts.app')

@section('content')
    <header class="flex items-center ">
        <div class="flex justify-between items-end w-full">
            <p class="text-muted font-light">
                <a href="/projects" class="text-muted no-underline hover:underline">My Projects</a> / {{ $project->title }}
            </p>

            <div class="flex items-center">
                @foreach ($project->members as $member)
                    <img src="{{ gravatar_url($member->email) }}" alt="{{ $member->name }}'s avatar" class="rounded-full w-8 mr-2">
                @endforeach

                <img src="{{ gravatar_url($project->owner->email) }}" alt="{{ $project->owner->name }}'s avatar"
                     class="rounded-full w-8 mr-2">

                <a href="{{ $project->path() . '/edit' }}" class="button ml-4">Edit Project</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto my-6 px-4">
        <!-- Filter section -->
        <div class="flex  items-center mb-8">
            <div class="flex flex-col mr-4">
                <label for="issue_type" class="font-bold">Issue Type:</label>
                <select id="issue_type" name="issue_type" class="bg-white border border-gray-200 rounded-lg shadow px-2 py-1">
                    <option value="">All</option>
                    <option value="bug">Bug</option>
                    <option value="feature">Feature</option>
                    <option value="task">Task</option>
                </select>
            </div>
            <div class="flex flex-col mr-4">
                <label for="category" class="font-bold">Category:</label>
                <select id="category" name="category" class="bg-white border border-gray-200 rounded-lg shadow px-2 py-1">
                    <option value="">All</option>
                    <option value="backend">Backend</option>
                    <option value="frontend">Frontend</option>
                    <option value="design">Design</option>
                </select>
            </div>

            <!-- Assignee filter -->
            <div class="flex flex-col mr-4">
                <label for="assignee" class="font-bold">Assignee:</label>
                <select id="assignee" name="assignee" class="bg-white border border-gray-200 rounded-lg shadow px-2 py-1">
                    <option value="">All</option>
                    <option value="john">John</option>
                    <option value="jane">Jane</option>
                    <option value="bob">Bob</option>
                </select>
            </div>

            <!-- Save Filter button -->
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="saveFilter()">
                Save Filter
            </button>
        </div>

        <div class="flex flex-wrap -mx-4">

            <div class="w-full md:w-1/4 p-4 bg-card">
                <h2 class="text-xl font-bold text-gray-800  ">
                    <span class="rounded-full w-4 h-4 bg-default border mr-2 border-accent"></span>
                    <span class=" text-xl font-medium mr-2 px-1.5 py-0.5 rounded  border border-green-400 font-bold text-task-open">Open</span>
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2 rounded-full bg-button ">11</span>
                </h2>

                <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded text-sm text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add task
                </button>

                <div>
                    <a href="#" class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3">
                        <div class="flex items-top">
                            <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 mb-5 mt-1 rounded-full bg-task ">TASK</span>
                            <p class="text-accent font-bold">FBI_System_123</p>

                            <button class="bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex justify-end ml-12 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2 10a2 2 0 012-2h12a2 2 0 110 4H4a2 2 0 01-2-2zm2-5a2 2 0 110-4h12a2 2 0 110 4H4zm0 10a2 2 0 110-4h12a2 2 0 110 4H4z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div>
                            <p class="text-gray-800 ">Here are the biggest enterprise technology acquisitions of 2021 .</p>
                        </div>

                        <div class="flex flex-wrap ">
                            <img src="{{ gravatar_url($project->owner->email) }}" alt="{{ $project->owner->name }}'s avatar"
                                 class="rounded-full w-8 mr-2">

                            <span class="fa-stack ">
                                <span class="fa fa-comment fa-stack-1x mr-1 ">2</span>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3">
                        <div class="flex items-top">
                            <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 mb-5 mt-1 rounded-full bg-task ">TASK</span>
                            <p class="text-accent font-bold">FBI_System_123</p>

                            <button class="bg-gray-200 hover:bg-gray-300 rounded-full h-8 w-8 flex justify-end ml-12 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2 10a2 2 0 012-2h12a2 2 0 110 4H4a2 2 0 01-2-2zm2-5a2 2 0 110-4h12a2 2 0 110 4H4zm0 10a2 2 0 110-4h12a2 2 0 110 4H4z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div>
                            <p class="text-gray-800 ">Here are the biggest enterprise technology acquisitions of 2021 .</p>
                        </div>

                        <div class="flex flex-wrap ">
                            <img src="{{ gravatar_url($project->owner->email) }}" alt="{{ $project->owner->name }}'s avatar"
                                 class="rounded-full w-8 mr-2">

                            <span class="fa-stack ">
                                <span class="fa fa-comment fa-stack-1x mr-1 ">2</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection
