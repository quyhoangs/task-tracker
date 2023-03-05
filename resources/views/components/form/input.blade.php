@props(['name', 'type' => 'text'])
{{-- @dump( $name, $type)
@dd( $attributes->first()) --}}

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full "
           type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ $attributes->first() }}"
           required
    >
</x-form.field>
