@props(['name'])
<x-form.filde>

    <x-form.label name="{{ $name }}" />
    <textarea type="text" class="border border-gray-200 p-2 w-full" name=" {{ $name }}" id=" {{ $name }}"
        required>{{ $slot ?? old($name) }}

    </textarea>
</x-form.filde>
