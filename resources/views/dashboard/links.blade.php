<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-[#334155]">Useful Links</h1>
                <p class="text-[#94a3b8] mt-1">Quick access to important resources</p>
            </div>
            <x-ui.button>
                Add Link
            </x-ui.button>
        </div>

        <x-card title="Saved Links" description="Your collection of useful legal resources" class="glass">
            <div class="space-y-4">
                @foreach([
                    ['name' => 'Supreme Court of Pakistan', 'url' => 'https://www.supremecourt.gov.pk'],
                    ['name' => 'Law & Justice Commission', 'url' => 'https://www.ljcp.gov.pk'],
                    ['name' => 'Pakistan Law Site', 'url' => 'https://www.pakistanlawsite.com'],
                ] as $link)
                    <div class="flex items-center justify-between rounded-lg border border-white/20 p-4 glass">
                        <div class="flex items-center gap-4">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                                <svg class="h-5 w-5 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-[#334155]">{{ $link['name'] }}</p>
                                <p class="text-sm text-[#94a3b8]">{{ $link['url'] }}</p>
                            </div>
                        </div>
                        <x-ui.button variant="ghost" size="icon" tag="a" href="{{ $link['url'] }}" target="_blank">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </x-ui.button>
                    </div>
                @endforeach
            </div>
        </x-card>
    </div>
</x-layouts.dashboard>
