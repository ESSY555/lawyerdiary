@props([
    'icon' => null,
    'title' => 'No items found',
    'description' => null,
    'action' => null,
    'actionLabel' => null,
    'class' => ''
])

<div class="flex flex-col items-center justify-center py-8 sm:py-12 text-center {{ $class }}">
    @if($icon)
        <div class="mb-3 sm:mb-4 text-[#94a3b8]">
            {!! $icon !!}
        </div>
    @endif
    
    <h3 class="text-base sm:text-lg font-medium text-[#334155] mb-2 px-4">{{ $title }}</h3>
    
    @if($description)
        <p class="text-xs sm:text-sm text-[#94a3b8] mb-4 sm:mb-6 max-w-sm px-4">{{ $description }}</p>
    @endif
    
    @if($action && $actionLabel)
        <x-ui.button class="text-xs sm:text-sm">
            <svg class="h-3 w-3 sm:h-4 sm:w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            {{ $actionLabel }}
        </x-ui.button>
    @endif
</div>
