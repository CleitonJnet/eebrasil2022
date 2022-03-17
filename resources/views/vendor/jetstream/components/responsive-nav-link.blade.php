@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-600 text-base font-medium text-indigo-100 bg-indigo-800 focus:outline-none focus:text-indigo-900 focus:bg-indigo-800 focus:border-indigo-100 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:text-gray-100 hover:bg-gray-900 hover:border-gray-500 focus:outline-none focus:text-gray-100 focus:bg-gray-900 focus:border-gray-500 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
