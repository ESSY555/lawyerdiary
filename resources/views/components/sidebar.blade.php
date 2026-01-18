@props(['active' => ''])

<aside 
    x-show="sidebarOpen"
    x-cloak
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    :class="sidebarCollapsed ? 'w-20' : 'w-64'"
    class="fixed lg:static inset-y-0 left-0 z-50 lg:z-auto flex h-screen flex-shrink-0 flex-col bg-[#181c2b] text-white shadow-lg lg:shadow-none transition-all duration-300"
    @click.stop
>
    <!-- Logo Section -->
    <div class="flex items-center gap-3 px-4 lg:px-6 py-6 relative" :class="sidebarCollapsed ? 'justify-center px-2' : ''">
        <div class="flex h-10 w-10 items-center justify-center rounded-lg flex-shrink-0" :class="sidebarCollapsed ? 'bg-[#3f46f7]' : 'bg-[#4E44E6]'">
            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
            </svg>
        </div>
        <div class="flex flex-col overflow-hidden transition-all duration-300" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">
            <span class="text-lg font-bold text-white whitespace-nowrap">Lawyer Diary</span>
            <span class="text-xs text-[#9ca3af] whitespace-nowrap">DIGITAL MANAGEMENT</span>
        </div>
        <!-- Close button for mobile -->
        <button
            x-show="sidebarOpen"
            @click.stop="sidebarOpen = false"
            class="lg:hidden ml-auto p-1 rounded-lg hover:bg-[#2c3b4d] text-white flex-shrink-0"
        >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 space-y-1 px-2 lg:px-3 overflow-y-auto">
        @php
$navItems = [
    ['name' => 'Dashboard', 'route' => 'dashboard.dashboard', 'icon' => 'layout-dashboard'],
    ['name' => 'Calendar', 'route' => 'dashboard.calendar', 'icon' => 'calendar'],
    ['name' => 'Hearings', 'route' => 'dashboard.hearings', 'icon' => 'gavel'],
    ['name' => 'Cases', 'route' => 'dashboard.cases', 'icon' => 'folder-open'],
    ['name' => 'Clients', 'route' => 'dashboard.clients', 'icon' => 'users'],
    ['name' => 'Notes & Tasks', 'route' => 'dashboard.notes', 'icon' => 'note'],
    ['name' => 'Documents', 'route' => 'dashboard.documents', 'icon' => 'file-text'],
    ['name' => 'Legal Books', 'route' => 'dashboard.legal-books', 'icon' => 'book-open'],
    ['name' => 'Useful Links', 'route' => 'dashboard.links', 'icon' => 'link'],
];

$icons = [
    'layout-dashboard' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
    'calendar' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
    'gavel' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3',
    'folder-open' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z',
    'users' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
    'file-text' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
    'note' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
    'book-open' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
    'link' => 'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1',
];
        @endphp

        @foreach($navItems as $item)
                    @php
            $isActive = request()->routeIs($item['route']) ||
                ($active && str_contains($item['name'], $active));
                    @endphp
                    <a
                        href="{{ route($item['route']) }}"
                        @click="if (window.innerWidth < 1024) sidebarOpen = false"
                        class="group relative flex items-center py-2.5 text-sm transition-colors {{ $isActive ? 'font-semibold' : 'font-medium' }} {{ $isActive ? 'bg-blue-600 text-white' : 'text-white hover:bg-[#2c3b4d]/50' }}"
                        :class="sidebarCollapsed ? 'justify-center px-2 rounded-lg' : 'gap-3 px-3 {{ $isActive ? 'rounded-r-lg' : '' }}'"
                        :title="sidebarCollapsed ? '{{ $item['name'] }}' : ''"
                    >
                        <div class="flex h-9 w-9 items-center justify-center transition-colors flex-shrink-0 text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons[$item['icon']] }}" />
                            </svg>
                        </div>
                        <span class="overflow-hidden transition-all duration-300 whitespace-nowrap" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">{{ $item['name'] }}</span>
                    </a>
        @endforeach
    </nav>

    <!-- Logout Button -->
    <div class="p-3 border-t border-white/10">
        <a
            href="#"
            class="group relative flex items-center rounded-lg py-2.5 text-sm font-medium transition-colors text-white hover:bg-[#2c3b4d]/50"
            :class="sidebarCollapsed ? 'justify-center px-2' : 'gap-3 px-3'"
            :title="sidebarCollapsed ? 'Logout' : ''"
        >
            <div class="flex h-9 w-9 items-center justify-center rounded-md transition-colors flex-shrink-0 text-[#94a3b8] group-hover:text-[#d0d0d0]">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </div>
            <span class="overflow-hidden transition-all duration-300 whitespace-nowrap" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">Logout</span>
        </a>
    </div>

    <!-- Collapse/Expand Toggle Button at Bottom - Desktop Only -->
    <div class="hidden lg:flex items-center justify-center p-3 border-t border-white/10">
        <button
            @click="sidebarCollapsed = !sidebarCollapsed"
            class="flex items-center justify-center gap-2 w-full h-8 rounded-lg text-white hover:bg-[#2c3b4d]/50 transition-all duration-200"
            :title="sidebarCollapsed ? 'Expand sidebar' : 'Collapse sidebar'"
        >
            <svg class="h-5 w-5 transition-transform duration-300" :class="sidebarCollapsed ? '' : 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-sm font-medium overflow-hidden transition-all duration-300 whitespace-nowrap" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">Collapse</span>
        </button>
    </div>
</aside>
