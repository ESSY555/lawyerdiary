<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-[#334155]">Notes & Tasks</h1>
                <p class="text-[#94a3b8] mt-1">Keep track of important notes and tasks</p>
            </div>
            <x-ui.button>
                New Note
            </x-ui.button>
        </div>

        <div class="grid gap-4 md:grid-cols-2">
            <x-card title="Notes" description="Your important notes" class="glass">
                <div class="space-y-3">
                    <div class="flex items-start gap-3 rounded-lg border border-white/20 p-3 glass">
                        <svg class="h-5 w-5 text-[#6366f1] mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-[#334155]">Meeting notes from client consultation</p>
                            <p class="text-xs text-[#94a3b8] mt-1">2 days ago</p>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card title="Tasks" description="Your pending tasks" class="glass">
                <div class="space-y-3">
                    <div class="flex items-start gap-3 rounded-lg border border-white/20 p-3 glass">
                        <svg class="h-5 w-5 text-[#16a34a] mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-[#334155]">Review case documents</p>
                            <p class="text-xs text-[#94a3b8] mt-1">Due tomorrow</p>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </div>
</x-layouts.dashboard>
