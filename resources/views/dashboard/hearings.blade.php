<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="hearingsApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Hearings</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Track and manage all your court hearings</p>
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
                            New Hearing
                        </button>
                    </div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Upcoming Hearings -->
            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Upcoming</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="upcomingHearings.length"></p>
                    <p class="text-xs text-gray-500">Scheduled hearings</p>
                </div>
            </div>

            <!-- Today's Hearings -->
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
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Today</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="todayHearings.length"></p>
                    <p class="text-xs text-gray-500">Hearings today</p>
                </div>
            </div>

            <!-- Completed -->
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
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Completed</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="completedHearings.length"></p>
                    <p class="text-xs text-gray-500">Past hearings</p>
                </div>
            </div>

            <!-- Total -->
            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#6366f1]/10 to-[#8b5cf6]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#6366f1] to-[#8b5cf6] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="hearings.length"></p>
                    <p class="text-xs text-gray-500">All hearings</p>
                </div>
            </div>
        </div>

        <!-- Tabs and Search -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <!-- Tabs -->
                <div class="flex items-center gap-2 bg-gray-100 rounded-lg p-1">
                    <button 
                        @click="activeTab = 'upcoming'"
                        :class="activeTab === 'upcoming' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-4 py-2 rounded-md text-sm font-semibold transition-all"
                    >
                        Upcoming
                    </button>
                    <button 
                        @click="activeTab = 'today'"
                        :class="activeTab === 'today' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-4 py-2 rounded-md text-sm font-semibold transition-all"
                    >
                        Today
                    </button>
                    <button 
                        @click="activeTab = 'completed'"
                        :class="activeTab === 'completed' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-4 py-2 rounded-md text-sm font-semibold transition-all"
                    >
                        Completed
                    </button>
                    <button 
                        @click="activeTab = 'all'"
                        :class="activeTab === 'all' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-4 py-2 rounded-md text-sm font-semibold transition-all"
                    >
                        All
                    </button>
                </div>

                <!-- Search -->
                <div class="relative flex-1 max-w-md">
                    <input 
                        type="text" 
                        x-model="searchQuery"
                        placeholder="Search hearings..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent"
                    >
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <!-- Hearings List -->
            <div class="space-y-4">
                <template x-for="hearing in filteredHearings" :key="hearing.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-6">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                                <!-- Left Section -->
                                <div class="flex items-start gap-4 flex-1">
                                    <div class="p-3 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg flex-shrink-0">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-[#4338ca] transition-colors" x-text="hearing.caseName"></h3>
                                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                            <div class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span class="font-medium" x-text="hearing.date"></span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <span class="font-medium" x-text="hearing.time"></span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <span x-text="hearing.court"></span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                                <span x-text="hearing.judge"></span>
                                            </div>
                                        </div>
                                        <div class="mt-3 flex items-center gap-2">
                                            <span class="text-xs font-medium text-gray-500">Case #:</span>
                                            <span class="text-xs font-semibold text-gray-700" x-text="hearing.caseNumber"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Section -->
                                <div class="flex items-center gap-3">
                                    <!-- Status Badge -->
                                    <span 
                                        :class="[
                                            'px-4 py-1.5 rounded-full text-xs font-semibold',
                                            hearing.status === 'scheduled' ? 'bg-blue-100 text-blue-700' : '',
                                            hearing.status === 'completed' ? 'bg-green-100 text-green-700' : '',
                                            hearing.status === 'postponed' ? 'bg-yellow-100 text-yellow-700' : '',
                                            hearing.status === 'cancelled' ? 'bg-red-100 text-red-700' : ''
                                        ]"
                                        x-text="hearing.status.charAt(0).toUpperCase() + hearing.status.slice(1)"
                                    ></span>
                                    
                                    <!-- Actions -->
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

                <!-- Empty State -->
                <div x-show="filteredHearings.length === 0" class="text-center py-12">
                    <div class="relative mx-auto w-20 h-20 mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                        <div class="relative p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                            <svg class="h-12 w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 mb-1">No hearings found</p>
                    <p class="text-sm text-gray-500">Try adjusting your filters or search query</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function hearingsApp() {
            return {
                activeTab: 'upcoming',
                searchQuery: '',
                hearings: [
                    { 
                        id: 1, 
                        caseName: 'Ahmed vs. State', 
                        caseNumber: '2024-001',
                        date: 'Dec 20, 2024', 
                        time: '10:00 AM',
                        court: 'High Court - Room 3',
                        judge: 'Hon. Justice Smith',
                        status: 'scheduled'
                    },
                    { 
                        id: 2, 
                        caseName: 'Johnson vs. Corporation', 
                        caseNumber: '2024-045',
                        date: 'Dec 20, 2024', 
                        time: '2:30 PM',
                        court: 'District Court - Room 5',
                        judge: 'Hon. Justice Brown',
                        status: 'scheduled'
                    },
                    { 
                        id: 3, 
                        caseName: 'Williams Estate Case', 
                        caseNumber: '2024-078',
                        date: 'Dec 22, 2024', 
                        time: '11:00 AM',
                        court: 'Family Court - Room 2',
                        judge: 'Hon. Justice Davis',
                        status: 'scheduled'
                    },
                    { 
                        id: 4, 
                        caseName: 'Contract Dispute - ABC Ltd', 
                        caseNumber: '2024-123',
                        date: 'Dec 18, 2024', 
                        time: '3:00 PM',
                        court: 'Commercial Court',
                        judge: 'Hon. Justice Wilson',
                        status: 'completed'
                    },
                    { 
                        id: 5, 
                        caseName: 'Property Rights Case', 
                        caseNumber: '2024-156',
                        date: 'Dec 25, 2024', 
                        time: '9:30 AM',
                        court: 'High Court - Room 1',
                        judge: 'Hon. Justice Taylor',
                        status: 'scheduled'
                    },
                    { 
                        id: 6, 
                        caseName: 'Personal Injury Claim', 
                        caseNumber: '2024-089',
                        date: 'Dec 15, 2024', 
                        time: '1:00 PM',
                        court: 'Civil Court',
                        judge: 'Hon. Justice Martinez',
                        status: 'completed'
                    },
                ],

                get todayHearings() {
                    const today = new Date().toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
                    return this.hearings.filter(h => h.date === today);
                },

                get upcomingHearings() {
                    const today = new Date();
                    return this.hearings.filter(h => {
                        const hearingDate = new Date(h.date);
                        return hearingDate >= today && h.status === 'scheduled';
                    }).sort((a, b) => new Date(a.date) - new Date(b.date));
                },

                get completedHearings() {
                    return this.hearings.filter(h => h.status === 'completed');
                },

                get filteredHearings() {
                    let filtered = [];
                    
                    if (this.activeTab === 'upcoming') {
                        filtered = this.upcomingHearings;
                    } else if (this.activeTab === 'today') {
                        filtered = this.todayHearings;
                    } else if (this.activeTab === 'completed') {
                        filtered = this.completedHearings;
                    } else {
                        filtered = this.hearings;
                    }

                    if (this.searchQuery) {
                        const query = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(h => 
                            h.caseName.toLowerCase().includes(query) ||
                            h.caseNumber.toLowerCase().includes(query) ||
                            h.court.toLowerCase().includes(query) ||
                            h.judge.toLowerCase().includes(query)
                        );
                    }

                    return filtered;
                }
            }
        }
    </script>
</x-layouts.dashboard>
