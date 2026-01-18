<x-layouts.dashboard title="Dashboard - Lawyer Diary" :active="'Dashboard'">
    <div class="space-y-6 sm:space-y-8">
        <!-- Welcome Header -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Welcome Back!</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Here's what's happening with your practice today</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="hidden sm:flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="font-medium">{{ now()->format('l, F j, Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
        </div>

        <!-- Overview Section -->
        <div class="space-y-4 sm:space-y-5">
            <div class="flex items-center justify-between">
                <h2 class="text-xl sm:text-2xl font-bold text-[#334155]">Overview</h2>
            </div>
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Total Cases Card -->
            <a href="{{ route('dashboard.cases') }}" class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1 cursor-pointer block">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">+12%</span>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Cases</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1">0</p>
                    <p class="text-xs text-gray-500">Active cases</p>
                </div>
            </a>

            <!-- Total Clients Card -->
            <a href="{{ route('dashboard.clients') }}" class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1 cursor-pointer block">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#16a34a]/10 to-[#22c55e]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#16a34a] to-[#22c55e] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">+8%</span>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Clients</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1">0</p>
                    <p class="text-xs text-gray-500">Registered clients</p>
                </div>
            </a>

            <!-- Upcoming Hearings Card -->
            <a href="{{ route('dashboard.hearings') }}" class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1 cursor-pointer block">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#f97316]/10 to-[#fb923c]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#f97316] to-[#fb923c] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-orange-600 bg-orange-50 px-2 py-1 rounded-full">Today</span>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Upcoming Hearings</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1">0</p>
                    <p class="text-xs text-gray-500">Scheduled this week</p>
                </div>
            </a>

            <!-- Pending Tasks Card -->
            <a href="{{ route('dashboard.notes') }}" class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1 cursor-pointer block">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#ef4444]/10 to-[#f87171]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#ef4444] to-[#f87171] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-full">Urgent</span>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Pending Tasks</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1">0</p>
                    <p class="text-xs text-gray-500">Requires attention</p>
                </div>
            </a>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="space-y-4 sm:space-y-5">
            <div class="flex items-center justify-between">
                <h2 class="text-xl sm:text-2xl font-bold text-[#334155]">Activity & Insights</h2>
            </div>
            
            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column - 2/3 width -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Today's Schedule -->
                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                        <div class="bg-gradient-to-r from-[#f97316] to-[#fb923c] px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 bg-white/20 rounded-lg backdrop-blur-sm">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-white">Today's Schedule</h3>
                                        <p class="text-sm text-orange-100">{{ now()->format('l, F j') }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('dashboard.hearings') }}" class="text-sm font-medium text-white hover:text-orange-100 transition-colors">View All →</a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-col items-center justify-center py-12 text-center">
                                <div class="p-4 bg-orange-50 rounded-full mb-4">
                                    <svg class="h-12 w-12 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">No hearings scheduled</h4>
                                <p class="text-sm text-gray-500 mb-6">You have a clear schedule for today</p>
                                <a href="{{ route('dashboard.hearings') }}">
                                    <x-ui.button variant="default" class="bg-gradient-to-r from-[#f97316] to-[#fb923c] hover:from-[#fb923c] hover:to-[#fdba74] text-white border-0">
                                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Schedule Hearing
                                    </x-ui.button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Analytics Chart -->
                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 bg-gradient-to-br from-[#4338ca] to-[#6366f1] rounded-lg">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-900">Case Analytics</h3>
                                        <p class="text-xs text-gray-500">Last 6 months overview</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="text-xs px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-lg font-medium text-gray-700 transition-colors">6M</button>
                                    <button class="text-xs px-3 py-1 bg-blue-50 text-blue-600 rounded-lg font-medium transition-colors">1Y</button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <canvas id="caseAnalyticsChart" height="300"></canvas>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 bg-gradient-to-br from-[#4338ca] to-[#6366f1] rounded-lg">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Recent Activity</h3>
                                </div>
                                <a href="#" class="text-sm font-medium text-[#4338ca] hover:text-[#6366f1] transition-colors">View All →</a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Empty State -->
                                <div class="flex flex-col items-center justify-center py-12 text-center">
                                    <div class="p-4 bg-gray-50 rounded-full mb-4">
                                        <svg class="h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">No recent activity</h4>
                                    <p class="text-sm text-gray-500">Your recent activities will appear here</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

                <!-- Right Column - 1/3 width -->
                <div class="space-y-6">
                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-gradient-to-br from-[#6366f1] to-[#8b5cf6] rounded-lg">
                                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Quick Actions</h3>
                            </div>
                        </div>
                        <div class="p-4 space-y-2">
                            <a href="{{ route('dashboard.cases') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 transition-all group cursor-pointer">
                                <div class="p-2 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors">
                                    <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-blue-600">Add New Case</span>
                            </a>
                            <a href="{{ route('dashboard.clients') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gradient-to-r hover:from-green-50 hover:to-emerald-50 transition-all group cursor-pointer">
                                <div class="p-2 bg-green-100 rounded-lg group-hover:bg-green-200 transition-colors">
                                    <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-green-600">Add Client</span>
                            </a>
                            <a href="{{ route('dashboard.hearings') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gradient-to-r hover:from-orange-50 hover:to-amber-50 transition-all group cursor-pointer">
                                <div class="p-2 bg-orange-100 rounded-lg group-hover:bg-orange-200 transition-colors">
                                    <svg class="h-5 w-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-orange-600">Schedule Hearing</span>
                            </a>
                            <a href="{{ route('dashboard.notes') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50 transition-all group cursor-pointer">
                                <div class="p-2 bg-purple-100 rounded-lg group-hover:bg-purple-200 transition-colors">
                                    <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-purple-600">Add Note</span>
                            </a>
                        </div>
                    </div>

                    <!-- Upcoming Deadlines -->
                    <div class="bg-gradient-to-br from-[#4338ca] to-[#6366f1] rounded-xl shadow-lg overflow-hidden text-white">
                        <div class="px-6 py-4">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-white/20 rounded-lg backdrop-blur-sm">
                                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold">Upcoming Deadlines</h3>
                            </div>
                            <div class="space-y-3">
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 border border-white/20">
                                    <p class="text-sm font-medium mb-1">No deadlines</p>
                                    <p class="text-xs text-blue-100">You're all caught up!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('caseAnalyticsChart');
            if (ctx) {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        datasets: [
                            {
                                label: 'New Cases',
                                data: [12, 19, 15, 25, 22, 30],
                                borderColor: 'rgb(99, 102, 241)',
                                backgroundColor: 'rgba(99, 102, 241, 0.1)',
                                tension: 0.4,
                                fill: true,
                                borderWidth: 3,
                                pointRadius: 5,
                                pointHoverRadius: 7,
                                pointBackgroundColor: 'rgb(99, 102, 241)',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2
                            },
                            {
                                label: 'Closed Cases',
                                data: [8, 15, 12, 18, 20, 25],
                                borderColor: 'rgb(16, 185, 129)',
                                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                                tension: 0.4,
                                fill: true,
                                borderWidth: 3,
                                pointRadius: 5,
                                pointHoverRadius: 7,
                                pointBackgroundColor: 'rgb(16, 185, 129)',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2
                            },
                            {
                                label: 'Active Cases',
                                data: [45, 52, 48, 55, 58, 63],
                                borderColor: 'rgb(249, 115, 22)',
                                backgroundColor: 'rgba(249, 115, 22, 0.1)',
                                tension: 0.4,
                                fill: true,
                                borderWidth: 3,
                                pointRadius: 5,
                                pointHoverRadius: 7,
                                pointBackgroundColor: 'rgb(249, 115, 22)',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                                labels: {
                                    usePointStyle: true,
                                    padding: 15,
                                    font: {
                                        size: 12,
                                        weight: '500',
                                        family: "'Plus Jakarta Sans', sans-serif"
                                    },
                                    color: '#374151'
                                }
                            },
                            tooltip: {
                                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                                padding: 12,
                                titleFont: {
                                    size: 14,
                                    weight: '600',
                                    family: "'Plus Jakarta Sans', sans-serif"
                                },
                                bodyFont: {
                                    size: 13,
                                    family: "'Plus Jakarta Sans', sans-serif"
                                },
                                borderColor: 'rgba(255, 255, 255, 0.1)',
                                borderWidth: 1,
                                cornerRadius: 8,
                                displayColors: true
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.05)',
                                    drawBorder: false
                                },
                                ticks: {
                                    font: {
                                        size: 11,
                                        family: "'Plus Jakarta Sans', sans-serif"
                                    },
                                    color: '#6B7280',
                                    padding: 10
                                }
                            },
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    font: {
                                        size: 11,
                                        family: "'Plus Jakarta Sans', sans-serif"
                                    },
                                    color: '#6B7280',
                                    padding: 10
                                }
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index'
                        }
                    }
                });
            }
        });
    </script>
</x-layouts.dashboard>
