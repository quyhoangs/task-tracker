<div class="card flex flex-col" style="height: 200px">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-400 pl-4">
        <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
    </h3>

    <div class="text-gray-700 flex-1"> {{ \Illuminate\Support\Str::limit( $project->description ,100 ) }} </div>

    <footer>
        @can ('manage', $project)
            <form method="POST" action="{{ $project->path() }}" class="text-right">
                @method('DELETE')
                @csrf
                <button type="submit" class="button text-xs ">Delete</button>
            </form>
        @endcan
    </footer>
</div>
