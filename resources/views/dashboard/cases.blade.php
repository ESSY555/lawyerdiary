<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="casesApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Cases</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Manage all your legal cases</p>
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
                            New Case
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Active</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="activeCases.length"></p>
                    <p class="text-xs text-gray-500">Ongoing cases</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#f97316]/10 to-[#fb923c]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#f97316] to-[#fb923c] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Pending</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="pendingCases.length"></p>
                    <p class="text-xs text-gray-500">Awaiting action</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#16a34a]/10 to-[#22c55e]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#16a34a] to-[#22c55e] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Closed</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="closedCases.length"></p>
                    <p class="text-xs text-gray-500">Resolved cases</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#6366f1]/10 to-[#8b5cf6]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#6366f1] to-[#8b5cf6] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="cases.length"></p>
                    <p class="text-xs text-gray-500">All cases</p>
                </div>
            </div>
        </div>

        <!-- Cases List -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div class="flex items-center gap-2 bg-gray-100 rounded-lg p-1">
                    <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">All</button>
                    <button @click="activeTab = 'active'" :class="activeTab === 'active' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">Active</button>
                    <button @click="activeTab = 'pending'" :class="activeTab === 'pending' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">Pending</button>
                    <button @click="activeTab = 'closed'" :class="activeTab === 'closed' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">Closed</button>
                </div>
                <div class="relative flex-1 max-w-md">
                    <input type="text" x-model="searchQuery" placeholder="Search cases..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="space-y-4">
                <template x-for="caseItem in filteredCases" :key="caseItem.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-6">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                                <div class="flex items-start gap-4 flex-1">
                                    <div class="p-3 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg flex-shrink-0">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-[#4338ca] transition-colors" x-text="caseItem.name"></h3>
                                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                            <div class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                                <span x-text="caseItem.client"></span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span x-text="caseItem.date"></span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                                <span x-text="caseItem.documents + ' documents'"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span :class="['px-4 py-1.5 rounded-full text-xs font-semibold', caseItem.status === 'active' ? 'bg-green-100 text-green-700' : caseItem.status === 'pending' ? 'bg-yellow-100 text-yellow-700' : 'bg-gray-100 text-gray-700']" x-text="caseItem.status.charAt(0).toUpperCase() + caseItem.status.slice(1)"></span>
                                    <div class="flex items-center gap-2">
                                        <button class="p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-[#4338ca] transition-colors">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-red-600 transition-colors">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
                <div x-show="filteredCases.length === 0" class="text-center py-12">
                    <div class="relative mx-auto w-20 h-20 mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                        <div class="relative p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                            <svg class="h-12 w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 mb-1">No cases found</p>
                    <p class="text-sm text-gray-500">Try adjusting your filters or search query</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function casesApp() {
            return {
                activeTab: 'all',
                searchQuery: '',
                cases: [
                    { id: 1, name: 'Ahmed vs. State', client: 'Ahmed Khan', date: 'Jan 15, 2024', status: 'active', documents: 12 },
                    { id: 2, name: 'Fatima Enterprises', client: 'Fatima Ali', date: 'Jan 20, 2024', status: 'pending', documents: 8 },
                    { id: 3, name: 'Property Dispute #2024', client: 'Muhammad Raza', date: 'Dec 10, 2024', status: 'active', documents: 15 },
                    { id: 4, name: 'Contract Breach Case', client: 'Sarah Ahmed', date: 'Nov 5, 2024', status: 'closed', documents: 20 },
                    { id: 5, name: 'Employment Dispute', client: 'Ali Hassan', date: 'Jan 25, 2024', status: 'pending', documents: 6 },
                ],
                get activeCases() { return this.cases.filter(c => c.status === 'active'); },
                get pendingCases() { return this.cases.filter(c => c.status === 'pending'); },
                get closedCases() { return this.cases.filter(c => c.status === 'closed'); },
                get filteredCases() {
                    let filtered = this.activeTab === 'all' ? this.cases : this.cases.filter(c => c.status === this.activeTab);
                    if (this.searchQuery) {
                        const q = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(c => c.name.toLowerCase().includes(q) || c.client.toLowerCase().includes(q));
                    }
                    return filtered;
                }
            }
        }
    </script>
</x-layouts.dashboard>
