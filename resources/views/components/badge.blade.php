@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'teal' => 'text-teal-800',
        'red' => 'text-red-800',
        'black' => 'text-black-800',
        'white' => 'text-white-800',
        'blue' => 'text-blue-800',
        'gray' => 'text-gray-800',
        'yellow' => 'text-yellow-800',
        default => 'text-gray-800',
    };

    $bgColor = match ($bgColor) {
        'teal' => 'bg-teal-100',
        'red' => 'bg-red-100',
        'black' => 'bg-black-100',
        'white' => 'bg-white-100',
        'blue' => 'bg-blue-100',
        'gray' => 'bg-gray-100',
        'yellow' => 'bg-yellow-100',
        default => 'bg-gray-100',
    };
@endphp


<button {{ $attributes }} class="{{ $textColor }} {{ $bgColor }} rounded-xl px-3 py-1 text-base">
    {{ $slot }} </button>
