@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'text-sm text-[#334155] ' . $class]) }}>
    {{ $slot }}
</div>
