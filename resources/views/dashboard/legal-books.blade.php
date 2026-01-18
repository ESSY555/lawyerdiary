<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6">
        <div>
            <h1 class="text-3xl font-bold text-[#334155]">Legal Books</h1>
            <p class="text-[#94a3b8] mt-1">Access legal references and books</p>
        </div>

        <x-card title="Available Books" description="Legal reference materials" class="glass">
            <div class="space-y-4">
                @foreach([
                    ['title' => 'Pakistan Penal Code (PPC)', 'author' => 'Official Publication'],
                    ['title' => 'Code of Criminal Procedure (CrPC)', 'author' => 'Official Publication'],
                    ['title' => 'Constitution of Pakistan', 'author' => 'Official Publication'],
                ] as $book)
                    <div class="flex items-center gap-4 rounded-lg border border-white/20 p-4 glass">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                            <svg class="h-5 w-5 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-[#334155]">{{ $book['title'] }}</p>
                            <p class="text-sm text-[#94a3b8]">{{ $book['author'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-card>
    </div>
</x-layouts.dashboard>
