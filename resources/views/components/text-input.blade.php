@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-md hover:border-indigo-400 disabled:opacity-50 disabled:cursor-not-allowed transition ease-in-out duration-300 transform hover:-translate-y-0.5']) !!}>
