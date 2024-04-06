@props(['active' => false])

{{-- Add condition to active nav  --}}
@php
    $classe = 'block ml-3 text-left text-sm leading-6 hover:bg-blue-300 ';
    if ($active) {
        $classe .= 'bg-blue-500 text-white';
    }
@endphp
<a {{ $attributes->merge(['class' => $classe]) }}>
    {{ $slot }}
</a>
