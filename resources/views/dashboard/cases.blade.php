<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-[#334155]">Cases</h1>
                <p class="text-[#94a3b8] mt-1">Manage all your legal cases</p>
            </div>
            <x-ui.button>
                New Case
            </x-ui.button>
        </div>

        <x-card title="All Cases" description="Your complete case portfolio" class="glass">
            <div class="space-y-4">
                @foreach([
                    ['id' => 1, 'name' => 'Ahmed vs. State', 'status' => 'Active', 'client' => 'Ahmed Khan'],
                    ['id' => 2, 'name' => 'Fatima Enterprises', 'status' => 'Pending', 'client' => 'Fatima Ali'],
                    ['id' => 3, 'name' => 'Property Dispute #2024', 'status' => 'Active', 'client' => 'Muhammad Raza'],
                ] as $caseItem)
                    <div class="flex items-center justify-between rounded-lg border border-white/20 p-4 glass">
                        <div class="flex items-center gap-4">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                                <svg class="h-5 w-5 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-[#334155]">{{ $caseItem['name'] }}</p>
                                <p class="text-sm text-[#94a3b8]">{{ $caseItem['client'] }}</p>
                            </div>
                        </div>
                        <x-ui.badge variant="{{ $caseItem['status'] === 'Active' ? 'default' : 'secondary' }}">
                            {{ $caseItem['status'] }}
                        </x-ui.badge>
                    </div>
                @endforeach
            </div>
        </x-card>
    </div>
</x-layouts.dashboard>
