<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-[#334155]">Clients</h1>
                <p class="text-[#94a3b8] mt-1">Manage your client database</p>
            </div>
            <x-ui.button>
                Add Client
            </x-ui.button>
        </div>

        <x-card title="Client List" description="All your clients and their contact information" class="glass">
            <div class="space-y-4">
                @foreach([
                    ['name' => 'Ahmed Khan', 'email' => 'ahmed@example.com', 'phone' => '+92 300 1234567'],
                    ['name' => 'Fatima Ali', 'email' => 'fatima@example.com', 'phone' => '+92 300 2345678'],
                    ['name' => 'Muhammad Raza', 'email' => 'raza@example.com', 'phone' => '+92 300 3456789'],
                ] as $client)
                    <div class="flex items-center justify-between rounded-lg border border-white/20 p-4 glass">
                        <div class="flex items-center gap-4">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#4338ca]/20">
                                <svg class="h-5 w-5 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-[#334155]">{{ $client['name'] }}</p>
                                <div class="flex items-center gap-4 text-sm text-[#94a3b8]">
                                    <span class="flex items-center gap-1">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        {{ $client['email'] }}
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        {{ $client['phone'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-card>
    </div>
</x-layouts.dashboard>
