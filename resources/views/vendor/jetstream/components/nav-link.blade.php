@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center pt-1 border-b-2 border-indigo-300 text-sm font-medium leading-5 text-white focus:outline-indigo-50 focus:border-indigo-100 transition'
            : 'inline-flex items-center pt-1 border-b-2 border-gray-500 text-sm font-medium leading-5 text-gray-300 hover:text-gray-50 hover:border-gray-50 focus:outline-none focus:text-gray-200 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
