<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-[#334155]">Documents</h1>
                <p class="text-[#94a3b8] mt-1">Manage all your legal documents</p>
            </div>
            <x-ui.button>
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                Upload Document
            </x-ui.button>
        </div>

        <x-card title="All Documents" description="Your document library" class="glass">
            <div class="space-y-4">
                @foreach([
                    ['name' => 'Contract Agreement.pdf', 'size' => '2.4 MB', 'date' => '2024-01-15'],
                    ['name' => 'Court Order.docx', 'size' => '1.8 MB', 'date' => '2024-01-14'],
                    ['name' => 'Client Statement.pdf', 'size' => '3.2 MB', 'date' => '2024-01-13'],
                ] as $doc)
                    <div class="flex items-center justify-between rounded-lg border border-white/20 p-4 glass">
                        <div class="flex items-center gap-4">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                                <svg class="h-5 w-5 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-[#334155]">{{ $doc['name'] }}</p>
                                <p class="text-sm text-[#94a3b8]">{{ $doc['size'] }} • {{ $doc['date'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-card>
    </div>
</x-layouts.dashboard>
