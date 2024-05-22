@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 hover:text-gray-900 focus-within:text-gray-900 transition duration-300 ease-in-out hover:shadow-lg rounded-md']) }}>
    {{ $value ?? $slot }}
</label>
