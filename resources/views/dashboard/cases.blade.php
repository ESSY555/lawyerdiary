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
                    <div class="flex items-center gap-2 sm:gap-3 flex-wrap">
                        <!-- Export Excel Button -->
                        <button class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-4 py-1.5 sm:py-2 bg-[#16a34a] hover:bg-[#15803d] text-white rounded-lg text-xs sm:text-sm font-medium transition-colors shadow-sm hover:shadow-md">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="hidden sm:inline">Export Excel</span>
                            <span class="sm:hidden">Export</span>
                        </button>
                        <!-- New Case Button -->
                        <button class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-5 py-1.5 sm:py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all text-xs sm:text-sm font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span class="hidden sm:inline">New Case</span>
                            <span class="sm:hidden">New</span>
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

        <!-- Filters Section -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-4 mb-4">
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4 sm:h-5 sm:w-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <h2 class="text-base sm:text-lg font-semibold text-[#334155]">Filters</h2>
                </div>
                <button @click="clearFilters()" class="text-xs sm:text-base text-[#334155] hover:text-[#1e293b] font-medium transition-colors self-start sm:self-auto">
                    X Clear All
                </button>
            </div>

            <!-- Filter Inputs Row 1 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4 mb-4">
                <!-- Case Status -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Case Status</label>
                    <select x-model="filters.caseStatus" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>

                <!-- Client -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Client</label>
                    <input type="text" x-model="filters.client" placeholder="Client name..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>

                <!-- Case Name -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Case Name</label>
                    <input type="text" x-model="filters.caseName" placeholder="Case name..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
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

                <!-- Documents -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Min Documents</label>
                    <input type="number" x-model="filters.minDocuments" placeholder="0" min="0" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>
            </div>
        </div>

        <!-- Tabs and Table -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 sm:p-6">
            <div class="flex flex-col gap-4 mb-4 sm:mb-6">
                <!-- Tabs -->
                <div class="flex items-center gap-1.5 sm:gap-2 bg-gray-100 rounded-lg p-1 overflow-x-auto">
                    <button 
                        @click="activeTab = 'all'; currentPage = 1"
                        :class="activeTab === 'all' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        All
                    </button>
                    <button 
                        @click="activeTab = 'active'; currentPage = 1"
                        :class="activeTab === 'active' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        Active
                    </button>
                    <button 
                        @click="activeTab = 'pending'; currentPage = 1"
                        :class="activeTab === 'pending' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        Pending
                    </button>
                    <button 
                        @click="activeTab = 'closed'; currentPage = 1"
                        :class="activeTab === 'closed' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'"
                        class="px-3 sm:px-4 py-1.5 sm:py-2 rounded-md text-xs sm:text-sm font-semibold transition-all whitespace-nowrap"
                    >
                        Closed
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
                            placeholder="Search cases..."
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
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap" @click="sortBy('name')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>CASE NAME</span>
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
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap" @click="sortBy('date')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>DATE</span>
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
                                    <th class="px-3 sm:px-6 py-2 sm:py-3 text-left text-xs font-semibold text-[#334155] uppercase tracking-wider cursor-pointer hover:bg-gray-100 whitespace-nowrap hidden lg:table-cell" @click="sortBy('documents')">
                                        <div class="flex items-center gap-1 sm:gap-2">
                                            <span>DOCUMENTS</span>
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
                                <template x-if="paginatedCases.length === 0">
                                    <tr>
                                        <td colspan="6" class="px-4 sm:px-6 py-8 sm:py-12 text-center text-sm sm:text-base text-[#334155]">
                                            No data available in table
                                        </td>
                                    </tr>
                                </template>
                                <template x-for="caseItem in paginatedCases" :key="caseItem.id">
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm font-medium text-[#334155]" x-text="caseItem.name"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-[#334155] hidden md:table-cell" x-text="caseItem.client"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-[#334155]" x-text="caseItem.date"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-[#334155] hidden lg:table-cell" x-text="caseItem.documents + ' documents'"></td>
                                        <td class="px-3 sm:px-6 py-3 sm:py-4 whitespace-nowrap">
                                            <span 
                                                :class="[
                                                    'px-2 sm:px-3 py-0.5 sm:py-1 rounded-full text-xs font-semibold',
                                                    caseItem.status === 'active' ? 'bg-green-100 text-green-700' : '',
                                                    caseItem.status === 'pending' ? 'bg-yellow-100 text-yellow-700' : '',
                                                    caseItem.status === 'closed' ? 'bg-gray-100 text-gray-700' : ''
                                                ]"
                                                x-text="caseItem.status.charAt(0).toUpperCase() + caseItem.status.slice(1)"
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
                    Showing <span x-text="showingFrom"></span> to <span x-text="showingTo"></span> of <span x-text="filteredCases.length"></span> entries
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
        function casesApp() {
            return {
                activeTab: 'all',
                searchQuery: '',
                entriesPerPage: 25,
                currentPage: 1,
                sortColumn: '',
                sortDirection: 'asc',
                filters: {
                    caseStatus: '',
                    client: '',
                    caseName: '',
                    dateFrom: '',
                    dateTo: '',
                    minDocuments: ''
                },
                cases: [
                    { id: 1, name: 'Ahmed vs. State', client: 'Ahmed Khan', date: 'Jan 15, 2024', status: 'active', documents: 12 },
                    { id: 2, name: 'Fatima Enterprises', client: 'Fatima Ali', date: 'Jan 20, 2024', status: 'pending', documents: 8 },
                    { id: 3, name: 'Property Dispute #2024', client: 'Muhammad Raza', date: 'Dec 10, 2024', status: 'active', documents: 15 },
                    { id: 4, name: 'Contract Breach Case', client: 'Sarah Ahmed', date: 'Nov 5, 2024', status: 'closed', documents: 20 },
                    { id: 5, name: 'Employment Dispute', client: 'Ali Hassan', date: 'Jan 25, 2024', status: 'pending', documents: 6 },
                    { id: 6, name: 'Tax Appeal Case', client: 'Zainab Malik', date: 'Jan 10, 2024', status: 'active', documents: 9 },
                    { id: 7, name: 'Property Rights', client: 'Hassan Ali', date: 'Dec 20, 2024', status: 'active', documents: 11 },
                    { id: 8, name: 'Corporate Merger', client: 'ABC Corp', date: 'Nov 15, 2024', status: 'closed', documents: 25 },
                ],
                get activeCases() { return this.cases.filter(c => c.status === 'active'); },
                get pendingCases() { return this.cases.filter(c => c.status === 'pending'); },
                get closedCases() { return this.cases.filter(c => c.status === 'closed'); },
                
                clearFilters() {
                    this.filters = {
                        caseStatus: '',
                        client: '',
                        caseName: '',
                        dateFrom: '',
                        dateTo: '',
                        minDocuments: ''
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

                get filteredCases() {
                    let filtered = [];
                    
                    // Apply tab filter first
                    if (this.activeTab === 'all') {
                        filtered = [...this.cases];
                    } else {
                        filtered = this.cases.filter(c => c.status === this.activeTab);
                    }

                    // Apply search
                    if (this.searchQuery) {
                        const q = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(c => 
                            c.name.toLowerCase().includes(q) || 
                            c.client.toLowerCase().includes(q)
                        );
                    }

                    // Apply filters
                    if (this.filters.caseStatus) {
                        filtered = filtered.filter(c => c.status === this.filters.caseStatus);
                    }

                    if (this.filters.client) {
                        filtered = filtered.filter(c => 
                            c.client.toLowerCase().includes(this.filters.client.toLowerCase())
                        );
                    }

                    if (this.filters.caseName) {
                        filtered = filtered.filter(c => 
                            c.name.toLowerCase().includes(this.filters.caseName.toLowerCase())
                        );
                    }

                    if (this.filters.minDocuments) {
                        filtered = filtered.filter(c => c.documents >= parseInt(this.filters.minDocuments));
                    }

                    // Apply sorting
                    if (this.sortColumn) {
                        filtered.sort((a, b) => {
                            let aVal = a[this.sortColumn] || '';
                            let bVal = b[this.sortColumn] || '';
                            
                            if (this.sortColumn === 'documents') {
                                aVal = parseInt(aVal);
                                bVal = parseInt(bVal);
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
                    return Math.ceil(this.filteredCases.length / this.entriesPerPage);
                },

                get paginatedCases() {
                    const start = (this.currentPage - 1) * this.entriesPerPage;
                    const end = start + this.entriesPerPage;
                    return this.filteredCases.slice(start, end);
                },

                get showingFrom() {
                    if (this.filteredCases.length === 0) return 0;
                    return (this.currentPage - 1) * this.entriesPerPage + 1;
                },

                get showingTo() {
                    const end = this.currentPage * this.entriesPerPage;
                    return Math.min(end, this.filteredCases.length);
                }
            }
        }
    </script>
</x-layouts.dashboard>
