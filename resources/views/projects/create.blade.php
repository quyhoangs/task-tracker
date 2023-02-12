@extends ('layouts.app')

@section('content')
    <x-form method="POST" action="/projects" >
        <h1 class="text-2xl font-normal mb-10 text-center">Let’s start something new</h1>
        <x-form.input name="title" />
        <x-form.textarea name="description"  />
        <x-form.button > Create Project </x-form.button>
        <x-form.button_cancel :url="'/projects'">Cancel </x-form.button>
        <x-form.error  />
    </x-form>
@endsection
