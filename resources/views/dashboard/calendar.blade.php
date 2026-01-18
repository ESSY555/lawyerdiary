<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="calendarApp()" x-init="init()">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Calendar</h1>
                <p class="text-gray-600">Manage your hearings and appointments</p>
            </div>
            <div class="flex items-center gap-3">
                <x-ui.button variant="outline" class="hidden sm:flex">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Today
                </x-ui.button>
                <x-ui.button variant="default" class="bg-gradient-to-r from-[#4338ca] to-[#6366f1] hover:from-[#6366f1] hover:to-[#8b5cf6] text-white border-0">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    New Event
                </x-ui.button>
            </div>
        </div>

        <!-- Calendar Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Calendar View - 2/3 width -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                    <!-- Calendar Header -->
                    <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-[#4338ca] to-[#6366f1]">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <button @click="previousMonth()" class="p-2 rounded-lg hover:bg-white/20 text-white transition-colors">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <h2 class="text-xl font-bold text-white" x-text="currentMonthYear"></h2>
                                <button @click="nextMonth()" class="p-2 rounded-lg hover:bg-white/20 text-white transition-colors">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center gap-2">
                                <button @click="viewMode = 'month'" :class="viewMode === 'month' ? 'bg-white/20' : 'hover:bg-white/10'" class="px-3 py-1.5 rounded-lg text-white text-sm font-medium transition-colors">Month</button>
                                <button @click="viewMode = 'week'" :class="viewMode === 'week' ? 'bg-white/20' : 'hover:bg-white/10'" class="px-3 py-1.5 rounded-lg text-white text-sm font-medium transition-colors">Week</button>
                            </div>
                        </div>
                    </div>

                    <!-- Calendar Grid -->
                    <div class="p-6">
                        <!-- Day Names -->
                        <div class="grid grid-cols-7 gap-2 mb-4">
                            <template x-for="day in dayNames" :key="day">
                                <div class="text-center text-sm font-semibold text-gray-600 py-2" x-text="day"></div>
                            </template>
                        </div>

                        <!-- Calendar Days -->
                        <div class="grid grid-cols-7 gap-2">
                            <template x-for="(day, index) in calendarDays" :key="index">
                                <div 
                                    @click="selectDate(day.date)"
                                    :class="[
                                        'relative min-h-[80px] sm:min-h-[100px] p-2 rounded-lg border-2 transition-all cursor-pointer',
                                        day.isCurrentMonth ? 'bg-white border-gray-200 hover:border-[#4338ca] hover:bg-blue-50' : 'bg-gray-50 border-gray-100 text-gray-400',
                                        day.isToday ? 'border-[#4338ca] bg-blue-50' : '',
                                        day.isSelected ? 'ring-2 ring-[#4338ca] ring-offset-2' : ''
                                    ]"
                                >
                                    <div class="flex items-center justify-between mb-1">
                                        <span :class="[
                                            'text-sm font-medium',
                                            day.isToday ? 'bg-[#4338ca] text-white rounded-full w-6 h-6 flex items-center justify-center' : '',
                                            !day.isCurrentMonth ? 'text-gray-400' : 'text-gray-900'
                                        ]" x-text="day.day"></span>
                                        <span x-show="day.eventCount > 0" class="text-xs bg-[#4338ca] text-white rounded-full w-5 h-5 flex items-center justify-center" x-text="day.eventCount"></span>
                                    </div>
                                    <div class="space-y-1 mt-1">
                                        <template x-for="event in day.events.slice(0, 2)" :key="event.id">
                                            <div :class="[
                                                'text-xs px-1.5 py-0.5 rounded truncate',
                                                event.type === 'hearing' ? 'bg-orange-100 text-orange-700' : '',
                                                event.type === 'meeting' ? 'bg-blue-100 text-blue-700' : '',
                                                event.type === 'deadline' ? 'bg-red-100 text-red-700' : '',
                                                event.type === 'other' ? 'bg-purple-100 text-purple-700' : ''
                                            ]" x-text="event.title"></div>
                                        </template>
                                        <div x-show="day.events.length > 2" class="text-xs text-gray-500 px-1" x-text="'+' + (day.events.length - 2) + ' more'"></div>
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
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-[#f97316] to-[#fb923c]">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-white/20 rounded-lg backdrop-blur-sm">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white">Today's Events</h3>
                                <p class="text-xs text-orange-100" x-text="todayDate"></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="space-y-3" x-show="todayEvents.length > 0">
                            <template x-for="event in todayEvents" :key="event.id">
                                <div class="flex items-start gap-3 p-3 rounded-lg border border-gray-200 hover:border-[#4338ca] hover:bg-blue-50 transition-all cursor-pointer group">
                                    <div :class="[
                                        'p-2 rounded-lg flex-shrink-0',
                                        event.type === 'hearing' ? 'bg-orange-100' : '',
                                        event.type === 'meeting' ? 'bg-blue-100' : '',
                                        event.type === 'deadline' ? 'bg-red-100' : '',
                                        event.type === 'other' ? 'bg-purple-100' : ''
                                    ]">
                                        <svg class="h-4 w-4" :class="[
                                            event.type === 'hearing' ? 'text-orange-600' : '',
                                            event.type === 'meeting' ? 'text-blue-600' : '',
                                            event.type === 'deadline' ? 'text-red-600' : '',
                                            event.type === 'other' ? 'text-purple-600' : ''
                                        ]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 text-sm group-hover:text-[#4338ca] transition-colors" x-text="event.title"></p>
                                        <div class="flex items-center gap-2 mt-1">
                                            <svg class="h-3 w-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p class="text-xs text-gray-500" x-text="event.time"></p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1" x-text="event.location"></p>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div x-show="todayEvents.length === 0" class="text-center py-8">
                            <div class="p-3 bg-gray-50 rounded-full w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                                <svg class="h-8 w-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-sm text-gray-500">No events scheduled for today</p>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-gradient-to-br from-[#4338ca] to-[#6366f1] rounded-lg">
                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Upcoming</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="space-y-3">
                            <template x-for="event in upcomingEvents" :key="event.id">
                                <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                                    <div class="flex flex-col items-center min-w-[50px]">
                                        <span class="text-xs font-semibold text-gray-500 uppercase" x-text="event.dateShort"></span>
                                        <span class="text-lg font-bold text-gray-900" x-text="event.day"></span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 text-sm" x-text="event.title"></p>
                                        <p class="text-xs text-gray-500 mt-1" x-text="event.time"></p>
                                    </div>
                                    <div :class="[
                                        'w-2 h-2 rounded-full mt-2 flex-shrink-0',
                                        event.type === 'hearing' ? 'bg-orange-500' : '',
                                        event.type === 'meeting' ? 'bg-blue-500' : '',
                                        event.type === 'deadline' ? 'bg-red-500' : '',
                                        event.type === 'other' ? 'bg-purple-500' : ''
                                    ]"></div>
                                </div>
                            </template>
                            <div x-show="upcomingEvents.length === 0" class="text-center py-6">
                                <p class="text-sm text-gray-500">No upcoming events</p>
                            </div>
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
                ],

                init() {
                    this.selectedDate = new Date();
                },

                get currentMonthYear() {
                    return this.currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
                },

                get todayDate() {
                    return new Date().toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric' });
                },

                get calendarDays() {
                    const year = this.currentDate.getFullYear();
                    const month = this.currentDate.getMonth();
                    const firstDay = new Date(year, month, 1);
                    const lastDay = new Date(year, month + 1, 0);
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

                selectDate(date) {
                    this.selectedDate = date;
                }
            }
        }
    </script>
</x-layouts.dashboard>
