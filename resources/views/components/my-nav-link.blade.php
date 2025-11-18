{{-- bg-gray-900 text-white --}}
{{-- text-gray-300 hover:bg-white/5 hover:text-white --}}
{{-- aria-current="page" --}}

@props(['href', 'current' => false, 'ariaCurrent' => false])

@php
    if($current){
        $clasess = "bg-indigo-900 text-white";
        $ariaCurrent = "page";
    } else {
        $clasess = "text-gray-900 hover:bg-indigo-700 hover:text-white";
    }
@endphp

<a href="{{ $href }}" 
{{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $clasess, 'aria-current' => $ariaCurrent]) }}
>{{ $slot }}</a>