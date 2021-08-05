@props(['active'=> false])
@php
    $classes = 'block text-left px-2 text-sm leading-6 hover:bg-blue-500 hover:text-white focus:bg-blue-500
    focus:outline-none';

    if ($active) $classes .= ' bg-blue-500 text-white';
@endphp
<a {{$attributes->merge(['class'=> $classes ])}}>
    {{ $slot }}
</a>