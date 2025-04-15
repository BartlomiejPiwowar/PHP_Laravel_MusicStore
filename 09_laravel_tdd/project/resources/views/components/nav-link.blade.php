@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-lg border-b-2 border-gray-500 font-medium leading-5 text-black focus:outline-none focus:border-gray-400 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 text-lg border-b-2 border-transparent font-medium leading-5 text-gray-600 hover:text-gray-900 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
