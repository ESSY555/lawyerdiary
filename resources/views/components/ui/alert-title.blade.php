@props(['class' => ''])

<h5 {{ $attributes->merge(['class' => 'mb-1 font-medium leading-none tracking-tight text-[#4338ca] ' . $class]) }}>
    {{ $slot }}
</h5>
