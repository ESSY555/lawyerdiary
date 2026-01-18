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
                    <div class="flex items-center gap-2 sm:gap-3 flex-wrap">
                        <!-- Export Excel Button -->
                        <button class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-4 py-1.5 sm:py-2 bg-[#16a34a] hover:bg-[#15803d] text-white rounded-lg text-xs sm:text-sm font-medium transition-colors shadow-sm hover:shadow-md">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="hidden sm:inline">Export Excel</span>
                            <span class="sm:hidden">Export</span>
                        </button>
                        <!-- Schedule Hearing Button -->
                        <button class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-5 py-1.5 sm:py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all text-xs sm:text-sm font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span class="hidden sm:inline">Schedule Hearing</span>
                            <span class="sm:hidden">Schedule</span>
                        </button>
                        <!-- Calendar View Button -->
                        <button class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-4 py-1.5 sm:py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition-all text-white text-xs sm:text-sm font-medium">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="hidden sm:inline">Calendar View</span>
                            <span class="sm:hidden">Calendar</span>
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

        <!-- Filters Section -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-4 mb-4">
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4 sm:h-5 sm:w-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <h2 class="text-base sm:text-lg font-semibold text-[#334155]">Filters</h2>
                </div>
                <button @click="clearFilters()" class="text-sm sm:text-base text-[#334155] hover:text-[#1e293b] font-medium transition-colors self-start sm:self-auto">
                    X Clear All
                </button>
            </div>

            <!-- Filter Inputs Row 1 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4 mb-4">
                <!-- Hearing Status -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Hearing Status</label>
                    <select x-model="filters.hearingStatus" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                        <option value="">All Status</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="completed">Completed</option>
                        <option value="postponed">Postponed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>

                <!-- Case Status -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Case Status</label>
                    <select x-model="filters.caseStatus" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                        <option value="">All Cases</option>
                        <option value="active">Active</option>
                        <option value="closed">Closed</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>

                <!-- Court Room -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Court Room</label>
                    <input type="text" x-model="filters.courtRoom" placeholder="Court room..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>

                <!-- Client -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Client</label>
                    <input type="text" x-model="filters.client" placeholder="Client name..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>

                <!-- Date From -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Date From</label>
                    <div class="relative">
                        <input type="date" x-model="filters.dateFrom" placeholder="mm/dd/yyyy" class="w-full px-3 py-2 pr-8 sm:pr-10 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                        <svg class="absolute right-2.5 sm:right-3 top-2.5 h-4 w-4 sm:h-5 sm:w-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>

                <!-- Date To -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Date To</label>
                    <div class="relative">
                        <input type="date" x-model="filters.dateTo" placeholder="mm/dd/yyyy" class="w-full px-3 py-2 pr-8 sm:pr-10 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                        <svg class="absolute right-2.5 sm:right-3 top-2.5 h-4 w-4 sm:h-5 sm:w-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Filter Checkboxes Row 2 -->
            <div class="flex flex-wrap items-center gap-4 sm:gap-6">
                <!-- Upcoming Only -->
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" x-model="filters.upcomingOnly" class="w-4 h-4 text-[#4338ca] border-gray-300 rounded focus:ring-[#4338ca]">
                    <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-[#334155]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-xs sm:text-sm font-medium text-[#334155]">Upcoming Only</span>
                </label>

                <!-- Today Only -->
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" x-model="filters.todayOnly" class="w-4 h-4 text-[#4338ca] border-gray-300 rounded focus:ring-[#4338ca]">
                    <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-[#334155]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-xs sm:text-sm font-medium text-[#334155]">Today Only</span>
                </label>
            </div>
        </div>

        <!-- Tabs and Search -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 sm:p-6">
            <div class="flex flex-col gap-4 mb-4 sm:mb-6">
                <!-- Tabs -->
                <div class="flex items-center gap-1.5 sm:gap-2 bg-gray-100 rounded-lg p-1 overflow-x-auto">
                    <button 
                        @click="activeTab = 'upcoming'; currentPage = 1"
                        :class="activeTab === 'upcoming' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        Upcoming
                    </button>
                    <button 
                        @click="activeTab = 'today'; currentPage = 1"
                        :class="activeTab === 'today' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        Today
                    </button>
                    <button 
                        @click="activeTab = 'completed'; currentPage = 1"
                        :class="activeTab === 'completed' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        Completed
                    </button>
                    <button 
                        @click="activeTab = 'all'; currentPage = 1"
                        :class="activeTab === 'all' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        All
                    </button>
                </div>

                <!-- Table Controls -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                    <div class="flex items-center gap-2">
                        <span class="text-xs sm:text-sm text-[#334155] whitespace-nowrap">Show</span>
                        <select x-model="entriesPerPage" @change="currentPage = 1" class="px-2 sm:px-3 py-1.5 text-xs sm:text-sm border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="text-xs sm:text-sm text-[#334155] whitespace-nowrap">entries</span>
                    </div>
                    <!-- Search -->
                    <div class="relative flex-1 min-w-0">
                        <input 
                            type="text" 
                            x-model="searchQuery"
                            placeholder="Search hearings..."
                            class="w-full pl-9 sm:pl-10 pr-3 sm:pr-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent"
                        >
                        <svg class="absolute left-2.5 sm:left-3 top-2.5 h-4 w-4 sm:h-5 sm:w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Data Table -->
            <div class="overflow-x-auto -mx-4 sm:mx-0">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100" @click="sortBy('dateTime')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span class="whitespace-nowrap">DATE & TIME</span>
                                            <div class="flex flex-col">
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400 -mt-0.5 sm:-mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap" @click="sortBy('title')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>TITLE</span>
                                            <div class="flex flex-col">
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400 -mt-0.5 sm:-mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap" @click="sortBy('caseNumber')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>CASE</span>
                                            <div class="flex flex-col">
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400 -mt-0.5 sm:-mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap hidden md:table-cell" @click="sortBy('client')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>CLIENT</span>
                                            <div class="flex flex-col">
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400 -mt-0.5 sm:-mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap hidden lg:table-cell" @click="sortBy('courtRoom')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>COURT ROOM</span>
                                            <div class="flex flex-col">
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400 -mt-0.5 sm:-mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap" @click="sortBy('status')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>STATUS</span>
                                            <div class="flex flex-col">
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                                <svg class="h-2.5 w-2.5 sm:h-3 sm:w-3 text-gray-400 -mt-0.5 sm:-mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <template x-if="paginatedHearings.length === 0">
                                    <tr>
                                        <td colspan="7" class="px-4 sm:px-6 py-8 sm:py-12 text-center text-sm sm:text-base text-[#334155]">
                                            No data available in table
                                        </td>
                                    </tr>
                                </template>
                                <template x-for="hearing in paginatedHearings" :key="hearing.id">
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-[#334155]">
                                            <div class="font-medium" x-text="hearing.date"></div>
                                            <div class="text-gray-500 text-xs" x-text="hearing.time"></div>
                                        </td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm font-medium text-[#334155]" x-text="hearing.title || hearing.caseName"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-[#334155]" x-text="hearing.caseNumber"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-[#334155] hidden md:table-cell" x-text="hearing.client || 'N/A'"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-[#334155] hidden lg:table-cell" x-text="hearing.courtRoom || hearing.court"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap">
                                            <span 
                                                :class="[
                                                    'px-2 sm:px-3 py-0.5 sm:py-1 rounded-full text-xs font-semibold',
                                                    hearing.status === 'scheduled' ? 'bg-blue-100 text-blue-700' : '',
                                                    hearing.status === 'completed' ? 'bg-green-100 text-green-700' : '',
                                                    hearing.status === 'postponed' ? 'bg-yellow-100 text-yellow-700' : '',
                                                    hearing.status === 'cancelled' ? 'bg-red-100 text-red-700' : ''
                                                ]"
                                                x-text="hearing.status.charAt(0).toUpperCase() + hearing.status.slice(1)"
                                            ></span>
                                        </td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm font-medium">
                                            <div class="flex items-center gap-1.5 sm:gap-2">
                                                <button class="text-[#4338ca] hover:text-[#312e81] transition-colors" title="Edit">
                                                    <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                                <button class="text-red-600 hover:text-red-700 transition-colors" title="Delete">
                                                    <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="px-4 sm:px-6 py-3 sm:py-4 border-t border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-4 mt-4 sm:mt-6">
                <div class="text-xs sm:text-sm text-[#334155] text-center sm:text-left">
                    Showing <span x-text="showingFrom"></span> to <span x-text="showingTo"></span> of <span x-text="filteredHearings.length"></span> entries
                </div>
                <div class="flex items-center justify-center sm:justify-end gap-2">
                    <button 
                        @click="currentPage = Math.max(1, currentPage - 1)"
                        :disabled="currentPage === 1"
                        :class="currentPage === 1 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 border border-gray-300 rounded-lg text-xs sm:text-sm text-[#334155] transition-colors"
                    >
                        Previous
                    </button>
                    <button 
                        @click="currentPage = Math.min(totalPages, currentPage + 1)"
                        :disabled="currentPage === totalPages"
                        :class="currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 border border-gray-300 rounded-lg text-xs sm:text-sm text-[#334155] transition-colors"
                    >
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function hearingsApp() {
            return {
                activeTab: 'upcoming',
                searchQuery: '',
                entriesPerPage: 25,
                currentPage: 1,
                sortColumn: '',
                sortDirection: 'asc',
                filters: {
                    hearingStatus: '',
                    caseStatus: '',
                    courtRoom: '',
                    client: '',
                    dateFrom: '',
                    dateTo: '',
                    upcomingOnly: false,
                    todayOnly: false
                },
                hearings: [
                    { 
                        id: 1, 
                        title: 'Ahmed vs. State',
                        caseName: 'Ahmed vs. State', 
                        caseNumber: '2024-001',
                        client: 'Ahmed Ali',
                        date: 'Dec 20, 2024', 
                        time: '10:00 AM',
                        courtRoom: 'High Court - Room 3',
                        court: 'High Court - Room 3',
                        judge: 'Hon. Justice Smith',
                        status: 'scheduled',
                        dateTime: '2024-12-20T10:00:00'
                    },
                    { 
                        id: 2, 
                        title: 'Johnson vs. Corporation',
                        caseName: 'Johnson vs. Corporation', 
                        caseNumber: '2024-045',
                        client: 'John Johnson',
                        date: 'Dec 20, 2024', 
                        time: '2:30 PM',
                        courtRoom: 'District Court - Room 5',
                        court: 'District Court - Room 5',
                        judge: 'Hon. Justice Brown',
                        status: 'scheduled',
                        dateTime: '2024-12-20T14:30:00'
                    },
                    { 
                        id: 3, 
                        title: 'Williams Estate Case',
                        caseName: 'Williams Estate Case', 
                        caseNumber: '2024-078',
                        client: 'Sarah Williams',
                        date: 'Dec 22, 2024', 
                        time: '11:00 AM',
                        courtRoom: 'Family Court - Room 2',
                        court: 'Family Court - Room 2',
                        judge: 'Hon. Justice Davis',
                        status: 'scheduled',
                        dateTime: '2024-12-22T11:00:00'
                    },
                    { 
                        id: 4, 
                        title: 'Contract Dispute - ABC Ltd',
                        caseName: 'Contract Dispute - ABC Ltd', 
                        caseNumber: '2024-123',
                        client: 'ABC Ltd',
                        date: 'Dec 18, 2024', 
                        time: '3:00 PM',
                        courtRoom: 'Commercial Court',
                        court: 'Commercial Court',
                        judge: 'Hon. Justice Wilson',
                        status: 'completed',
                        dateTime: '2024-12-18T15:00:00'
                    },
                    { 
                        id: 5, 
                        title: 'Property Rights Case',
                        caseName: 'Property Rights Case', 
                        caseNumber: '2024-156',
                        client: 'Michael Brown',
                        date: 'Dec 25, 2024', 
                        time: '9:30 AM',
                        courtRoom: 'High Court - Room 1',
                        court: 'High Court - Room 1',
                        judge: 'Hon. Justice Taylor',
                        status: 'scheduled',
                        dateTime: '2024-12-25T09:30:00'
                    },
                    { 
                        id: 6, 
                        title: 'Personal Injury Claim',
                        caseName: 'Personal Injury Claim', 
                        caseNumber: '2024-089',
                        client: 'Emma Davis',
                        date: 'Dec 15, 2024', 
                        time: '1:00 PM',
                        courtRoom: 'Civil Court',
                        court: 'Civil Court',
                        judge: 'Hon. Justice Martinez',
                        status: 'completed',
                        dateTime: '2024-12-15T13:00:00'
                    },
                ],

                get todayHearings() {
                    const today = new Date().toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
                    return this.hearings.filter(h => h.date === today);
                },

                get upcomingHearings() {
                    const today = new Date();
                    return this.hearings.filter(h => {
                        const hearingDate = new Date(h.dateTime || h.date);
                        return hearingDate >= today && h.status === 'scheduled';
                    }).sort((a, b) => new Date(a.dateTime || a.date) - new Date(b.dateTime || b.date));
                },

                get completedHearings() {
                    return this.hearings.filter(h => h.status === 'completed');
                },

                clearFilters() {
                    this.filters = {
                        hearingStatus: '',
                        caseStatus: '',
                        courtRoom: '',
                        client: '',
                        dateFrom: '',
                        dateTo: '',
                        upcomingOnly: false,
                        todayOnly: false
                    };
                    this.currentPage = 1;
                },

                sortBy(column) {
                    if (this.sortColumn === column) {
                        this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
                    } else {
                        this.sortColumn = column;
                        this.sortDirection = 'asc';
                    }
                },

                get filteredHearings() {
                    let filtered = [];
                    
                    // Apply tab filter first
                    if (this.activeTab === 'upcoming') {
                        filtered = this.upcomingHearings;
                    } else if (this.activeTab === 'today') {
                        filtered = this.todayHearings;
                    } else if (this.activeTab === 'completed') {
                        filtered = this.completedHearings;
                    } else {
                        filtered = [...this.hearings];
                    }

                    // Apply search
                    if (this.searchQuery) {
                        const query = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(h => 
                            (h.title || h.caseName || '').toLowerCase().includes(query) ||
                            (h.caseNumber || '').toLowerCase().includes(query) ||
                            (h.client || '').toLowerCase().includes(query) ||
                            (h.courtRoom || h.court || '').toLowerCase().includes(query)
                        );
                    }

                    // Apply filters
                    if (this.filters.hearingStatus) {
                        filtered = filtered.filter(h => h.status === this.filters.hearingStatus);
                    }

                    if (this.filters.courtRoom) {
                        filtered = filtered.filter(h => 
                            (h.courtRoom || h.court || '').toLowerCase().includes(this.filters.courtRoom.toLowerCase())
                        );
                    }

                    if (this.filters.client) {
                        filtered = filtered.filter(h => 
                            (h.client || '').toLowerCase().includes(this.filters.client.toLowerCase())
                        );
                    }

                    if (this.filters.dateFrom) {
                        filtered = filtered.filter(h => {
                            const hearingDate = new Date(h.dateTime || h.date);
                            const filterDate = new Date(this.filters.dateFrom);
                            return hearingDate >= filterDate;
                        });
                    }

                    if (this.filters.dateTo) {
                        filtered = filtered.filter(h => {
                            const hearingDate = new Date(h.dateTime || h.date);
                            const filterDate = new Date(this.filters.dateTo);
                            filterDate.setHours(23, 59, 59);
                            return hearingDate <= filterDate;
                        });
                    }

                    if (this.filters.upcomingOnly) {
                        const today = new Date();
                        today.setHours(0, 0, 0, 0);
                        filtered = filtered.filter(h => {
                            const hearingDate = new Date(h.dateTime || h.date);
                            return hearingDate >= today && h.status === 'scheduled';
                        });
                    }

                    if (this.filters.todayOnly) {
                        const today = new Date().toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
                        filtered = filtered.filter(h => h.date === today);
                    }

                    // Apply sorting
                    if (this.sortColumn) {
                        filtered.sort((a, b) => {
                            let aVal = a[this.sortColumn] || '';
                            let bVal = b[this.sortColumn] || '';
                            
                            if (this.sortColumn === 'dateTime') {
                                aVal = new Date(a.dateTime || a.date);
                                bVal = new Date(b.dateTime || b.date);
                            } else {
                                aVal = String(aVal).toLowerCase();
                                bVal = String(bVal).toLowerCase();
                            }

                            if (aVal < bVal) return this.sortDirection === 'asc' ? -1 : 1;
                            if (aVal > bVal) return this.sortDirection === 'asc' ? 1 : -1;
                            return 0;
                        });
                    }

                    return filtered;
                },

                get totalPages() {
                    return Math.ceil(this.filteredHearings.length / this.entriesPerPage);
                },

                get paginatedHearings() {
                    const start = (this.currentPage - 1) * this.entriesPerPage;
                    const end = start + this.entriesPerPage;
                    return this.filteredHearings.slice(start, end);
                },

                get showingFrom() {
                    if (this.filteredHearings.length === 0) return 0;
                    return (this.currentPage - 1) * this.entriesPerPage + 1;
                },

                get showingTo() {
                    const end = this.currentPage * this.entriesPerPage;
                    return Math.min(end, this.filteredHearings.length);
                }
            }
        }
    </script>
</x-layouts.dashboard>
