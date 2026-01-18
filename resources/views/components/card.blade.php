@props(['class' => '', 'title' => null, 'description' => null])

<div class="glass rounded-lg border p-4 sm:p-6 text-card-foreground shadow-sm animate-fade-in {{ $class }}">
    @if($title || $description)
        <div class="flex flex-col space-y-1.5 p-4 sm:p-6">
            @if($title)
                <h3 class="text-xl sm:text-2xl font-semibold leading-none tracking-tight text-[#334155]">{{ $title }}</h3>
            @endif
            @if($description)
                <p class="text-xs sm:text-sm text-[#94a3b8]">{{ $description }}</p>
            @endif
        </div>
        <div class="p-4 sm:p-6 pt-0">
            {{ $slot }}
        </div>
    @else
        {{ $slot }}
    @endif
</div>

