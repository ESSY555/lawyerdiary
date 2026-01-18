<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="clientsApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Clients</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Manage your client database</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="hidden sm:flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition-all text-white font-medium">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
                        <button class="flex items-center gap-2 px-5 py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Client
                        </button>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Clients</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="clients.length"></p>
                    <p class="text-xs text-gray-500">All clients</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#16a34a]/10 to-[#22c55e]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#16a34a] to-[#22c55e] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Active</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="activeClients.length"></p>
                    <p class="text-xs text-gray-500">With active cases</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#f97316]/10 to-[#fb923c]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#f97316] to-[#fb923c] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">New This Month</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="newClients.length"></p>
                    <p class="text-xs text-gray-500">Recent additions</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#6366f1]/10 to-[#8b5cf6]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#6366f1] to-[#8b5cf6] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Contacted</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="contactedClients.length"></p>
                    <p class="text-xs text-gray-500">This week</p>
                </div>
            </div>
        </div>

        <!-- Clients List -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div class="relative flex-1 max-w-md">
                    <input type="text" x-model="searchQuery" placeholder="Search clients..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <template x-for="client in filteredClients" :key="client.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-6">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="p-3 rounded-full bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg">
                                    <span class="text-white font-bold text-lg" x-text="client.initials"></span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-[#4338ca] transition-colors" x-text="client.name"></h3>
                                    <p class="text-sm text-gray-500" x-text="client.company || 'Individual'"></p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="truncate" x-text="client.email"></span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span x-text="client.phone"></span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                    </svg>
                                    <span x-text="client.cases + ' cases'"></span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <button class="flex-1 px-3 py-2 bg-[#4338ca] text-white rounded-lg hover:bg-[#6366f1] transition-colors text-sm font-medium">View</button>
                                <button class="p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-[#4338ca] transition-colors">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
                <div x-show="filteredClients.length === 0" class="col-span-full text-center py-12">
                    <div class="relative mx-auto w-20 h-20 mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                        <div class="relative p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                            <svg class="h-12 w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 mb-1">No clients found</p>
                    <p class="text-sm text-gray-500">Try adjusting your search query</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function clientsApp() {
            return {
                searchQuery: '',
                clients: [
                    { id: 1, name: 'Ahmed Khan', initials: 'AK', email: 'ahmed@example.com', phone: '+92 300 1234567', company: '', cases: 3, status: 'active' },
                    { id: 2, name: 'Fatima Ali', initials: 'FA', email: 'fatima@example.com', phone: '+92 300 2345678', company: 'Fatima Enterprises', cases: 2, status: 'active' },
                    { id: 3, name: 'Muhammad Raza', initials: 'MR', email: 'raza@example.com', phone: '+92 300 3456789', company: '', cases: 1, status: 'active' },
                    { id: 4, name: 'Sarah Ahmed', initials: 'SA', email: 'sarah@example.com', phone: '+92 300 4567890', company: 'Ahmed Corp', cases: 5, status: 'active' },
                    { id: 5, name: 'Ali Hassan', initials: 'AH', email: 'ali@example.com', phone: '+92 300 5678901', company: '', cases: 2, status: 'active' },
                    { id: 6, name: 'Zainab Malik', initials: 'ZM', email: 'zainab@example.com', phone: '+92 300 6789012', company: 'Malik Group', cases: 4, status: 'active' },
                ],
                get activeClients() { return this.clients.filter(c => c.status === 'active'); },
                get newClients() { return this.clients.filter(c => c.cases <= 1); },
                get contactedClients() { return this.clients.slice(0, 3); },
                get filteredClients() {
                    if (!this.searchQuery) return this.clients;
                    const q = this.searchQuery.toLowerCase();
                    return this.clients.filter(c => c.name.toLowerCase().includes(q) || c.email.toLowerCase().includes(q) || c.phone.includes(q));
                }
            }
        }
    </script>
</x-layouts.dashboard>
