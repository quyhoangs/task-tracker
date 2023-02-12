@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea
        class="textarea bg-transparent border border-grey-light rounded p-2 text-xs w-full"
        name="{{ $name }}"
        rows="10"
        id="{{ $name }}"
        required
    >{{ $attributes->first()}}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
