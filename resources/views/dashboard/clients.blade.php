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
                    <div class="flex items-center gap-2 sm:gap-3 flex-wrap">
                        <!-- Export Excel Button -->
                        <button class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-4 py-1.5 sm:py-2 bg-[#16a34a] hover:bg-[#15803d] text-white rounded-lg text-xs sm:text-sm font-medium transition-colors shadow-sm hover:shadow-md">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="hidden sm:inline">Export Excel</span>
                            <span class="sm:hidden">Export</span>
                        </button>
                        <!-- Add Client Button -->
                        <button class="flex items-center gap-1.5 sm:gap-2 px-3 sm:px-5 py-1.5 sm:py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all text-xs sm:text-sm font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span class="hidden sm:inline">Add Client</span>
                            <span class="sm:hidden">Add</span>
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
                <!-- Status -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Status</label>
                    <select x-model="filters.status" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <!-- Client Name -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Client Name</label>
                    <input type="text" x-model="filters.clientName" placeholder="Client name..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>

                <!-- Company -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Company</label>
                    <input type="text" x-model="filters.company" placeholder="Company name..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Email</label>
                    <input type="text" x-model="filters.email" placeholder="Email address..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Phone</label>
                    <input type="text" x-model="filters.phone" placeholder="Phone number..." class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>

                <!-- Min Cases -->
                <div>
                    <label class="block text-xs sm:text-sm font-medium text-[#334155] mb-1.5 sm:mb-1">Min Cases</label>
                    <input type="number" x-model="filters.minCases" placeholder="0" min="0" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                </div>
            </div>
        </div>

        <!-- Clients List -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 sm:p-6">
            <div class="flex flex-col gap-4 mb-4 sm:mb-6">
                <!-- Table Controls -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                    <div class="flex items-center gap-2">
                        <span class="text-xs sm:text-sm text-[#334155] whitespace-nowrap">Show</span>
                        <select x-model="entriesPerPage" @change="currentPage = 1" class="px-2 sm:px-3 py-1.5 text-xs sm:text-sm border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                            <option value="6">6</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="24">24</option>
                        </select>
                        <span class="text-xs sm:text-sm text-[#334155] whitespace-nowrap">entries</span>
                    </div>
                    <!-- Search -->
                    <div class="relative flex-1 min-w-0">
                        <input 
                            type="text" 
                            x-model="searchQuery" 
                            placeholder="Search clients..." 
                            class="w-full pl-9 sm:pl-10 pr-3 sm:pr-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent"
                        >
                        <svg class="absolute left-2.5 sm:left-3 top-2.5 h-4 w-4 sm:h-5 sm:w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Clients Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                <template x-if="paginatedClients.length === 0">
                    <div class="col-span-full text-center py-12">
                        <div class="relative mx-auto w-20 h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                            <div class="relative p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                                <svg class="h-12 w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-lg font-semibold text-gray-900 mb-1">No clients found</p>
                        <p class="text-sm text-gray-500">Try adjusting your filters or search query</p>
                    </div>
                </template>
                <template x-for="client in paginatedClients" :key="client.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-4 sm:p-6">
                            <div class="flex items-start gap-3 sm:gap-4 mb-3 sm:mb-4">
                                <div class="p-2.5 sm:p-3 rounded-full bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg flex-shrink-0">
                                    <span class="text-white font-bold text-base sm:text-lg" x-text="client.initials"></span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-1 group-hover:text-[#4338ca] transition-colors break-words" x-text="client.name"></h3>
                                    <p class="text-xs sm:text-sm text-gray-500" x-text="client.company || 'Individual'"></p>
                                </div>
                            </div>
                            <div class="space-y-1.5 sm:space-y-2">
                                <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-600">
                                    <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="truncate" x-text="client.email"></span>
                                </div>
                                <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-600">
                                    <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span x-text="client.phone"></span>
                                </div>
                                <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-600">
                                    <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                    </svg>
                                    <span x-text="client.cases + ' cases'"></span>
                                </div>
                            </div>
                            <div class="mt-3 sm:mt-4 flex items-center gap-2">
                                <button class="flex-1 px-2 sm:px-3 py-1.5 sm:py-2 bg-[#4338ca] text-white rounded-lg hover:bg-[#6366f1] transition-colors text-xs sm:text-sm font-medium">View</button>
                                <button class="p-1.5 sm:p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-[#4338ca] transition-colors">
                                    <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Pagination -->
            <div class="px-4 sm:px-6 py-3 sm:py-4 border-t border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-4 mt-4 sm:mt-6">
                <div class="text-xs sm:text-sm text-[#334155] text-center sm:text-left">
                    Showing <span x-text="showingFrom"></span> to <span x-text="showingTo"></span> of <span x-text="filteredClients.length"></span> entries
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
        function clientsApp() {
            return {
                searchQuery: '',
                entriesPerPage: 12,
                currentPage: 1,
                filters: {
                    status: '',
                    clientName: '',
                    company: '',
                    email: '',
                    phone: '',
                    minCases: ''
                },
                clients: [
                    { id: 1, name: 'Ahmed Khan', initials: 'AK', email: 'ahmed@example.com', phone: '+92 300 1234567', company: '', cases: 3, status: 'active' },
                    { id: 2, name: 'Fatima Ali', initials: 'FA', email: 'fatima@example.com', phone: '+92 300 2345678', company: 'Fatima Enterprises', cases: 2, status: 'active' },
                    { id: 3, name: 'Muhammad Raza', initials: 'MR', email: 'raza@example.com', phone: '+92 300 3456789', company: '', cases: 1, status: 'active' },
                    { id: 4, name: 'Sarah Ahmed', initials: 'SA', email: 'sarah@example.com', phone: '+92 300 4567890', company: 'Ahmed Corp', cases: 5, status: 'active' },
                    { id: 5, name: 'Ali Hassan', initials: 'AH', email: 'ali@example.com', phone: '+92 300 5678901', company: '', cases: 2, status: 'active' },
                    { id: 6, name: 'Zainab Malik', initials: 'ZM', email: 'zainab@example.com', phone: '+92 300 6789012', company: 'Malik Group', cases: 4, status: 'active' },
                    { id: 7, name: 'Hassan Ali', initials: 'HA', email: 'hassan@example.com', phone: '+92 300 7890123', company: '', cases: 2, status: 'active' },
                    { id: 8, name: 'Ayesha Khan', initials: 'AK', email: 'ayesha@example.com', phone: '+92 300 8901234', company: 'Khan Industries', cases: 3, status: 'active' },
                    { id: 9, name: 'Bilal Ahmed', initials: 'BA', email: 'bilal@example.com', phone: '+92 300 9012345', company: '', cases: 1, status: 'active' },
                    { id: 10, name: 'Sana Malik', initials: 'SM', email: 'sana@example.com', phone: '+92 300 0123456', company: 'Malik & Co', cases: 4, status: 'active' },
                    { id: 11, name: 'Usman Raza', initials: 'UR', email: 'usman@example.com', phone: '+92 300 1234567', company: '', cases: 2, status: 'active' },
                    { id: 12, name: 'Nadia Hassan', initials: 'NH', email: 'nadia@example.com', phone: '+92 300 2345678', company: 'Hassan Group', cases: 3, status: 'active' },
                ],
                get activeClients() { return this.clients.filter(c => c.status === 'active'); },
                get newClients() { return this.clients.filter(c => c.cases <= 1); },
                get contactedClients() { return this.clients.slice(0, 3); },
                
                clearFilters() {
                    this.filters = {
                        status: '',
                        clientName: '',
                        company: '',
                        email: '',
                        phone: '',
                        minCases: ''
                    };
                    this.currentPage = 1;
                },

                get filteredClients() {
                    let filtered = [...this.clients];

                    // Apply search
                    if (this.searchQuery) {
                        const q = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(c => 
                            c.name.toLowerCase().includes(q) || 
                            c.email.toLowerCase().includes(q) || 
                            c.phone.includes(q) ||
                            (c.company && c.company.toLowerCase().includes(q))
                        );
                    }

                    // Apply filters
                    if (this.filters.status) {
                        filtered = filtered.filter(c => c.status === this.filters.status);
                    }

                    if (this.filters.clientName) {
                        filtered = filtered.filter(c => 
                            c.name.toLowerCase().includes(this.filters.clientName.toLowerCase())
                        );
                    }

                    if (this.filters.company) {
                        filtered = filtered.filter(c => 
                            c.company && c.company.toLowerCase().includes(this.filters.company.toLowerCase())
                        );
                    }

                    if (this.filters.email) {
                        filtered = filtered.filter(c => 
                            c.email.toLowerCase().includes(this.filters.email.toLowerCase())
                        );
                    }

                    if (this.filters.phone) {
                        filtered = filtered.filter(c => 
                            c.phone.includes(this.filters.phone)
                        );
                    }

                    if (this.filters.minCases) {
                        filtered = filtered.filter(c => c.cases >= parseInt(this.filters.minCases));
                    }

                    return filtered;
                },

                get totalPages() {
                    return Math.ceil(this.filteredClients.length / this.entriesPerPage);
                },

                get paginatedClients() {
                    const start = (this.currentPage - 1) * this.entriesPerPage;
                    const end = start + this.entriesPerPage;
                    return this.filteredClients.slice(start, end);
                },

                get showingFrom() {
                    if (this.filteredClients.length === 0) return 0;
                    return (this.currentPage - 1) * this.entriesPerPage + 1;
                },

                get showingTo() {
                    const end = this.currentPage * this.entriesPerPage;
                    return Math.min(end, this.filteredClients.length);
                }
            }
        }
    </script>
</x-layouts.dashboard>
