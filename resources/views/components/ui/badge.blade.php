@props([
    'variant' => 'default',
    'class' => ''
])

@php
    $baseClasses = 'inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';
    
    $variants = [
        'default' => 'border-transparent bg-[#4338ca] text-white hover:bg-[#4338ca]/80',
        'secondary' => 'border-transparent bg-[#94a3b8]/20 text-[#94a3b8] hover:bg-[#94a3b8]/30',
        'destructive' => 'border-transparent bg-[#ef4444] text-white hover:bg-[#ef4444]/80',
        'outline' => 'text-[#334155] border-white/20',
        'success' => 'border-transparent bg-[#16a34a] text-white hover:bg-[#16a34a]/80',
    ];
    
    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['default']) . ' ' . $class;
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
