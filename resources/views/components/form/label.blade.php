@props(['name'])

<label class="label text-sm mb-2 block"
       for="{{ $name }}"
>
    {{ ucwords($name) }}
</label>
