@props([
    'variant' => 'default',
    'size' => 'default',
    'type' => 'button',
    'tag' => 'button',
    'class' => ''
])

@php
    $baseClasses = 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50';
    
    $variants = [
        'default' => 'bg-[#4338ca] text-white hover:bg-[#4338ca]/90 hover:shadow-lg hover:scale-105 active:scale-95',
        'destructive' => 'bg-[#ef4444] text-white hover:bg-[#ef4444]/90',
        'outline' => 'border border-white/20 bg-transparent hover:bg-accent hover:text-accent-foreground',
        'secondary' => 'bg-[#94a3b8]/20 text-[#334155] hover:bg-[#94a3b8]/30 hover:shadow-md',
        'ghost' => 'hover:bg-[#4338ca]/10 hover:text-[#4338ca]',
        'link' => 'text-[#4338ca] underline-offset-4 hover:underline',
    ];
    
    $sizes = [
        'default' => 'h-10 px-4 py-2',
        'sm' => 'h-9 rounded-md px-3',
        'lg' => 'h-11 rounded-md px-8',
        'icon' => 'h-10 w-10',
    ];
    
    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['default']) . ' ' . ($sizes[$size] ?? $sizes['default']) . ' ' . $class;
@endphp

@if($tag === 'a')
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
