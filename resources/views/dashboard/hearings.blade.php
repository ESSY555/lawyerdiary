<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6">
        <div>
            <h1 class="text-3xl font-bold text-[#334155]">Hearings</h1>
            <p class="text-[#94a3b8] mt-1">Track all your court hearings</p>
        </div>

        <x-card title="Upcoming Hearings" description="Your scheduled court appearances" class="glass">
            <div class="space-y-4">
                <div class="flex items-center justify-between rounded-lg border border-white/20 p-4 glass">
                    <div class="flex items-center gap-4">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                            <svg class="h-5 w-5 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-[#334155]">Ahmed vs. State</p>
                            <p class="text-sm text-[#94a3b8]">High Court - Room 3</p>
                        </div>
                    </div>
                    <x-ui.badge>
                        Scheduled
                    </x-ui.badge>
                </div>
            </div>
        </x-card>
    </div>
</x-layouts.dashboard>
