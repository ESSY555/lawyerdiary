<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="calendarApp()" x-init="init()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Calendar</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Manage your hearings and appointments</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button @click="goToToday()" class="hidden sm:flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition-all text-white font-medium">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Today
                        </button>
                        <button class="flex items-center gap-2 px-5 py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            New Event
                        </button>
                    </div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
        </div>

        <!-- Calendar Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Calendar View - 2/3 width -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                    <!-- Calendar Header -->
                    <div class="relative overflow-hidden bg-gradient-to-r from-[#4338ca] via-[#6366f1] to-[#8b5cf6] px-6 py-5">
                        <div class="relative z-10 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <button @click="viewMode === 'month' ? previousMonth() : previousWeek()" class="p-2.5 rounded-xl bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white transition-all hover:scale-110 active:scale-95 shadow-lg">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <h2 class="text-2xl font-bold text-white" x-text="viewMode === 'month' ? currentMonthYear : currentWeekRange"></h2>
                                <button @click="viewMode === 'month' ? nextMonth() : nextWeek()" class="p-2.5 rounded-xl bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white transition-all hover:scale-110 active:scale-95 shadow-lg">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-xl p-1">
                                <button @click="viewMode = 'month'" :class="viewMode === 'month' ? 'bg-white text-[#4338ca] shadow-lg' : 'text-white hover:bg-white/20'" class="px-4 py-1.5 rounded-lg text-sm font-semibold transition-all">Month</button>
                                <button @click="viewMode = 'week'" :class="viewMode === 'week' ? 'bg-white text-[#4338ca] shadow-lg' : 'text-white hover:bg-white/20'" class="px-4 py-1.5 rounded-lg text-sm font-semibold transition-all">Week</button>
                            </div>
                        </div>
                        <!-- Decorative gradient -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl -mr-16 -mt-16"></div>
                    </div>

                    <!-- Month View -->
                    <div x-show="viewMode === 'month'" class="p-8">
                        <!-- Day Names -->
                        <div class="grid grid-cols-7 mb-6">
                            <template x-for="day in dayNames" :key="day">
                                <div class="text-center text-sm font-semibold text-gray-700 py-2" x-text="day"></div>
                            </template>
                        </div>

                        <!-- Calendar Days -->
                        <div class="grid grid-cols-7 gap-0">
                            <template x-for="(day, index) in calendarDays" :key="index">
                                <div 
                                    @click="selectDate(day.date)"
                                    class="relative min-h-[80px] sm:min-h-[100px] flex flex-col items-center justify-start pt-3 cursor-pointer transition-colors"
                                >
                                    <!-- Day Number with Blue Circle for Today/Selected -->
                                    <div x-show="day.isToday || day.isSelected" class="flex flex-col items-center justify-center">
                                        <div class="w-14 h-14 rounded-full bg-[#4338ca] flex flex-col items-center justify-center">
                                            <span class="text-white text-lg font-semibold leading-tight" x-text="day.day"></span>
                                            <span x-show="day.eventCount > 0" class="text-white text-xs font-medium leading-none mt-0.5" x-text="day.eventCount"></span>
                                        </div>
                                    </div>
                                    
                                    <!-- Regular Day Number (not today/selected) -->
                                    <span 
                                        x-show="!day.isToday && !day.isSelected"
                                        :class="[
                                            'text-base font-medium transition-colors',
                                            !day.isCurrentMonth ? 'text-gray-400' : day.eventCount > 0 ? 'text-[#4338ca]' : 'text-gray-900'
                                        ]" 
                                        x-text="day.day"
                                    ></span>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Week View -->
                    <div x-show="viewMode === 'week'" class="p-6">
                        <!-- Day Headers -->
                        <div class="grid grid-cols-7 gap-2 mb-4">
                            <template x-for="(day, index) in weekDays" :key="index">
                                <div class="text-center">
                                    <div class="text-xs font-semibold text-gray-500 uppercase mb-2" x-text="dayNames[day.date.getDay()]"></div>
                                    <div 
                                        @click="selectDate(formatDate(day.date))"
                                        class="cursor-pointer"
                                    >
                                        <div x-show="day.isToday || day.isSelected" class="w-12 h-12 rounded-full bg-[#4338ca] flex flex-col items-center justify-center mx-auto">
                                            <span class="text-white text-base font-semibold leading-tight" x-text="day.date.getDate()"></span>
                                            <span x-show="day.eventCount > 0" class="text-white text-xs font-medium leading-none mt-0.5" x-text="day.eventCount"></span>
                                        </div>
                                        <span 
                                            x-show="!day.isToday && !day.isSelected"
                                            :class="[
                                                'text-lg font-medium',
                                                day.eventCount > 0 ? 'text-[#4338ca]' : 'text-gray-900'
                                            ]" 
                                            x-text="day.date.getDate()"
                                        ></span>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <!-- Week Events Timeline -->
                        <div class="grid grid-cols-7 gap-2 min-h-[400px]">
                            <template x-for="(day, index) in weekDays" :key="index">
                                <div class="border-l border-gray-200 pl-2">
                                    <div class="space-y-2">
                                        <template x-for="event in day.events" :key="event.id">
                                            <div 
                                                :class="[
                                                    'p-2 rounded-lg text-xs cursor-pointer hover:shadow-md transition-all',
                                                    event.type === 'hearing' ? 'bg-orange-100 text-orange-700 border border-orange-200' : '',
                                                    event.type === 'meeting' ? 'bg-blue-100 text-blue-700 border border-blue-200' : '',
                                                    event.type === 'deadline' ? 'bg-red-100 text-red-700 border border-red-200' : '',
                                                    event.type === 'other' ? 'bg-purple-100 text-purple-700 border border-purple-200' : ''
                                                ]"
                                            >
                                                <div class="font-semibold mb-1" x-text="event.time"></div>
                                                <div class="text-xs" x-text="event.title"></div>
                                            </div>
                                        </template>
                                        <div x-show="day.events.length === 0" class="text-xs text-gray-400 text-center py-4">No events</div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Events Sidebar - 1/3 width -->
            <div class="space-y-6">
                <!-- Today's Events -->
                <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                    <div class="relative overflow-hidden bg-gradient-to-r from-[#f97316] via-[#fb923c] to-[#fdba74] px-6 py-5">
                        <div class="relative z-10 flex items-center gap-3">
                            <div class="p-2.5 bg-white/20 rounded-xl backdrop-blur-sm shadow-lg">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Today's Events</h3>
                                <p class="text-sm text-orange-100 font-medium" x-text="todayDate"></p>
                            </div>
                        </div>
                        <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full blur-xl -mr-12 -mt-12"></div>
                    </div>
                    <div class="p-5">
                        <div class="space-y-3" x-show="todayEvents.length > 0">
                            <template x-for="event in todayEvents" :key="event.id">
                                <div class="group relative overflow-hidden flex items-start gap-4 p-4 rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                                    <div :class="[
                                        'p-3 rounded-xl flex-shrink-0 shadow-lg',
                                        event.type === 'hearing' ? 'bg-gradient-to-br from-orange-400 to-orange-500' : '',
                                        event.type === 'meeting' ? 'bg-gradient-to-br from-blue-400 to-blue-500' : '',
                                        event.type === 'deadline' ? 'bg-gradient-to-br from-red-400 to-red-500' : '',
                                        event.type === 'other' ? 'bg-gradient-to-br from-purple-400 to-purple-500' : ''
                                    ]">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-bold text-gray-900 text-sm mb-1 group-hover:text-[#4338ca] transition-colors" x-text="event.title"></p>
                                        <div class="flex items-center gap-2 mb-1">
                                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p class="text-xs font-semibold text-gray-600" x-text="event.time"></p>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <p class="text-xs text-gray-500" x-text="event.location"></p>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div x-show="todayEvents.length === 0" class="text-center py-12">
                            <div class="relative mx-auto w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-orange-100 to-orange-200 rounded-full blur-xl opacity-50"></div>
                                <div class="relative p-4 bg-gradient-to-br from-orange-100 to-orange-50 rounded-full">
                                    <svg class="h-12 w-12 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-gray-600">No events scheduled for today</p>
                            <p class="text-xs text-gray-500 mt-1">Enjoy your free day!</p>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-blue-50">
                        <div class="flex items-center gap-3">
                            <div class="p-2.5 bg-gradient-to-br from-[#4338ca] to-[#6366f1] rounded-xl shadow-lg">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Upcoming</h3>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="space-y-3">
                            <template x-for="event in upcomingEvents" :key="event.id">
                                <div class="group flex items-start gap-4 p-4 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer border-2 border-transparent hover:border-[#4338ca]/30 hover:shadow-lg">
                                    <div class="flex flex-col items-center min-w-[60px] p-2 rounded-lg bg-gradient-to-br from-gray-100 to-gray-50 group-hover:from-blue-100 group-hover:to-purple-100 transition-all">
                                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider" x-text="event.dateShort"></span>
                                        <span class="text-2xl font-bold text-gray-900 group-hover:text-[#4338ca] transition-colors" x-text="event.day"></span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-bold text-gray-900 text-sm mb-1 group-hover:text-[#4338ca] transition-colors" x-text="event.title"></p>
                                        <div class="flex items-center gap-2">
                                            <svg class="h-3.5 w-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p class="text-xs font-medium text-gray-600" x-text="event.time"></p>
                                        </div>
                                    </div>
                                    <div :class="[
                                        'w-3 h-3 rounded-full mt-2 flex-shrink-0 shadow-md',
                                        event.type === 'hearing' ? 'bg-gradient-to-br from-orange-400 to-orange-500' : '',
                                        event.type === 'meeting' ? 'bg-gradient-to-br from-blue-400 to-blue-500' : '',
                                        event.type === 'deadline' ? 'bg-gradient-to-br from-red-400 to-red-500' : '',
                                        event.type === 'other' ? 'bg-gradient-to-br from-purple-400 to-purple-500' : ''
                                    ]"></div>
                                </div>
                            </template>
                            <div x-show="upcomingEvents.length === 0" class="text-center py-8">
                                <div class="p-3 bg-gradient-to-br from-gray-100 to-gray-50 rounded-full w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                                    <svg class="h-8 w-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="text-sm font-medium text-gray-600">No upcoming events</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="bg-gradient-to-br from-[#4338ca] to-[#6366f1] rounded-2xl shadow-2xl overflow-hidden text-white p-6">
                    <h3 class="text-lg font-bold mb-4">This Month</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-white/20 rounded-lg">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium">Total Events</span>
                            </div>
                            <span class="text-xl font-bold" x-text="events.length"></span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
                            <div class="flex items-center gap-3">
                                <div class="p-2 bg-white/20 rounded-lg">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium">Hearings</span>
                            </div>
                            <span class="text-xl font-bold" x-text="events.filter(e => e.type === 'hearing').length"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calendarApp() {
            return {
                currentDate: new Date(),
                selectedDate: null,
                viewMode: 'month',
                dayNames: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                
                events: [
                    { id: 1, title: 'Court Hearing - Case #2024-001', date: '2024-12-20', time: '10:00 AM', location: 'High Court - Room 3', type: 'hearing' },
                    { id: 2, title: 'Client Meeting', date: '2024-12-20', time: '2:00 PM', location: 'Office', type: 'meeting' },
                    { id: 3, title: 'Document Deadline', date: '2024-12-22', time: '5:00 PM', location: 'Submission', type: 'deadline' },
                    { id: 4, title: 'Case Review', date: '2024-12-25', time: '11:00 AM', location: 'Office', type: 'meeting' },
                    { id: 5, title: 'Court Hearing - Case #2024-002', date: '2024-12-28', time: '9:30 AM', location: 'District Court', type: 'hearing' },
                    { id: 6, title: 'Team Standup', date: '2024-12-16', time: '9:00 AM', location: 'Conference Room', type: 'meeting' },
                    { id: 7, title: 'Client Consultation', date: '2024-12-17', time: '3:00 PM', location: 'Office', type: 'meeting' },
                    { id: 8, title: 'Filing Deadline', date: '2024-12-18', time: '4:00 PM', location: 'Court', type: 'deadline' },
                    { id: 9, title: 'Pre-trial Conference', date: '2024-12-19', time: '1:00 PM', location: 'Judge Chambers', type: 'hearing' },
                ],

                init() {
                    this.selectedDate = new Date();
                },

                get currentMonthYear() {
                    return this.currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
                },

                get currentWeekRange() {
                    const weekStart = this.getWeekStart(this.currentDate);
                    const weekEnd = new Date(weekStart);
                    weekEnd.setDate(weekEnd.getDate() + 6);
                    
                    const startMonth = weekStart.toLocaleDateString('en-US', { month: 'short' });
                    const endMonth = weekEnd.toLocaleDateString('en-US', { month: 'short' });
                    
                    if (startMonth === endMonth) {
                        return `${startMonth} ${weekStart.getDate()} - ${weekEnd.getDate()}, ${weekStart.getFullYear()}`;
                    } else {
                        return `${startMonth} ${weekStart.getDate()} - ${endMonth} ${weekEnd.getDate()}, ${weekStart.getFullYear()}`;
                    }
                },

                get todayDate() {
                    return new Date().toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric' });
                },

                getWeekStart(date) {
                    const d = new Date(date);
                    d.setHours(0, 0, 0, 0);
                    const day = d.getDay();
                    const diff = d.getDate() - day;
                    const weekStart = new Date(d.getFullYear(), d.getMonth(), diff);
                    return weekStart;
                },

                get weekDays() {
                    const weekStart = this.getWeekStart(this.currentDate);
                    const days = [];
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    
                    for (let i = 0; i < 7; i++) {
                        const date = new Date(weekStart);
                        date.setDate(weekStart.getDate() + i);
                        const dateStr = this.formatDate(date);
                        const dayEvents = this.events.filter(e => e.date === dateStr);
                        const isToday = date.getTime() === today.getTime();
                        const isSelected = this.selectedDate && date.getTime() === new Date(this.selectedDate).setHours(0, 0, 0, 0);
                        
                        days.push({
                            date: date,
                            dateStr: dateStr,
                            isToday: isToday,
                            isSelected: isSelected,
                            events: dayEvents,
                            eventCount: dayEvents.length
                        });
                    }
                    return days;
                },

                get calendarDays() {
                    const year = this.currentDate.getFullYear();
                    const month = this.currentDate.getMonth();
                    const firstDay = new Date(year, month, 1);
                    const startDate = new Date(firstDay);
                    startDate.setDate(startDate.getDate() - startDate.getDay());
                    
                    const days = [];
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    
                    for (let i = 0; i < 42; i++) {
                        const date = new Date(startDate);
                        date.setDate(startDate.getDate() + i);
                        const dateStr = this.formatDate(date);
                        const dayEvents = this.events.filter(e => e.date === dateStr);
                        const isToday = date.getTime() === today.getTime();
                        const isSelected = this.selectedDate && date.getTime() === new Date(this.selectedDate).setHours(0, 0, 0, 0);
                        
                        days.push({
                            date: dateStr,
                            day: date.getDate(),
                            isCurrentMonth: date.getMonth() === month,
                            isToday: isToday,
                            isSelected: isSelected,
                            events: dayEvents,
                            eventCount: dayEvents.length
                        });
                    }
                    return days;
                },

                get todayEvents() {
                    const today = this.formatDate(new Date());
                    return this.events
                        .filter(e => e.date === today)
                        .sort((a, b) => a.time.localeCompare(b.time));
                },

                get upcomingEvents() {
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    return this.events
                        .filter(e => {
                            const eventDate = new Date(e.date);
                            eventDate.setHours(0, 0, 0, 0);
                            return eventDate > today;
                        })
                        .sort((a, b) => new Date(a.date) - new Date(b.date))
                        .slice(0, 5)
                        .map(e => {
                            const eventDate = new Date(e.date);
                            return {
                                ...e,
                                dateShort: eventDate.toLocaleDateString('en-US', { month: 'short' }),
                                day: eventDate.getDate()
                            };
                        });
                },

                formatDate(date) {
                    return date.toISOString().split('T')[0];
                },

                previousMonth() {
                    this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() - 1, 1);
                },

                nextMonth() {
                    this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 1);
                },

                previousWeek() {
                    const newDate = new Date(this.currentDate);
                    newDate.setDate(newDate.getDate() - 7);
                    this.currentDate = newDate;
                },

                nextWeek() {
                    const newDate = new Date(this.currentDate);
                    newDate.setDate(newDate.getDate() + 7);
                    this.currentDate = newDate;
                },

                goToToday() {
                    const today = new Date();
                    this.currentDate = today;
                    this.selectedDate = today;
                },

                selectDate(date) {
                    this.selectedDate = date;
                }
            }
        }
    </script>
</x-layouts.dashboard>
