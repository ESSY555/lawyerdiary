@props([
    'variant' => 'default',
    'class' => ''
])

@php
    $baseClasses = 'relative w-full rounded-lg border p-4';
    
    $variants = [
        'default' => 'glass border-[#6366f1]/20 bg-background text-foreground',
        'destructive' => 'glass border-[#ef4444]/50 text-[#ef4444] bg-[#ef4444]/10',
    ];
    
    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['default']) . ' ' . $class;
@endphp

<div role="alert" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
