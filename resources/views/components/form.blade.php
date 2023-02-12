@props([
    'method' => 'POST',
    'action' => ''
])

<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
    action="{{ $action }}" {{ $attributes }}
    class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow"
>
    @csrf

    @if (! in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
