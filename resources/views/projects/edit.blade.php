@extends ('layouts.app')

@section('content')
<div class=" bg-card p-6 md:py-12 md:px-16 rounded shadow">
    <x-form method="PATCH" action="{{$project->path()}}" >
        <h1 class="text-2xl font-normal mb-10 text-center">Edit Your Project</h1>
        <x-form.input name="title"          :project="$project->title"  />
        <x-form.textarea name="description" :project="$project->description" />
        <x-form.button > Update Project </x-form.button>
        <x-form.button_cancel :project="$project->path()">Cancel </x-form.button>

        <x-form.error  />
    </x-form>
</div>
@endsection
