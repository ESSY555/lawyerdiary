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
    :class="sidebarCollapsed ? 'w-20' : 'w-72'"
    class="fixed lg:static inset-y-0 left-0 z-50 lg:z-auto flex h-screen flex-shrink-0 flex-col bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white shadow-2xl lg:shadow-xl border-r border-white/10 transition-all duration-300"
    style="background: linear-gradient(180deg, rgba(15, 23, 42, 0.95) 0%, rgba(30, 41, 59, 0.95) 50%, rgba(15, 23, 42, 0.95) 100%); backdrop-filter: blur(20px);"
    @click.stop
>
    <!-- Logo Section -->
    <div class="flex items-center gap-3 px-5 lg:px-6 py-6 relative border-b border-white/5" :class="sidebarCollapsed ? 'justify-center px-2' : ''">
        <div class="relative flex h-12 w-12 items-center justify-center rounded-xl flex-shrink-0 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-600 shadow-lg shadow-blue-500/20 ring-2 ring-blue-500/20">
            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
            </svg>
            <div class="absolute inset-0 rounded-xl bg-gradient-to-br from-white/20 to-transparent"></div>
        </div>
        <div class="flex flex-col overflow-hidden transition-all duration-300" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">
            <span class="text-xl font-bold text-white whitespace-nowrap tracking-tight">Lawyer Diary</span>
            <span class="text-xs text-slate-400 whitespace-nowrap font-medium tracking-wider">DIGITAL MANAGEMENT</span>
        </div>
        <!-- Close button for mobile -->
        <button
            x-show="sidebarOpen"
            @click.stop="sidebarOpen = false"
            class="lg:hidden ml-auto p-2 rounded-lg backdrop-blur-sm bg-white/5 hover:bg-white/10 border border-white/10 text-white flex-shrink-0 transition-all duration-200"
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 space-y-1.5 px-3 lg:px-4 py-4 overflow-y-auto overflow-x-hidden">
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
                class="group relative flex items-center py-3 text-sm transition-all duration-200 {{ $isActive ? 'font-semibold' : 'font-medium' }}"
                :class="sidebarCollapsed ? 'justify-center px-2 rounded-xl mx-2' : 'gap-3 px-4 rounded-xl mx-2'"
                :title="sidebarCollapsed ? '{{ $item['name'] }}' : ''"
            >
                @if($isActive)
                    <!-- Active Background with Gradient -->
                    <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-600/90 via-indigo-600/90 to-purple-600/90 shadow-lg shadow-blue-500/20 border border-white/10"></div>
                    <!-- Active Indicator Line -->
                    <div class="absolute left-2 top-1/2 -translate-y-1/2 w-1 h-8 bg-gradient-to-b from-blue-400 to-purple-400 rounded-r-full shadow-lg shadow-blue-400/50"></div>
                @else
                    <!-- Hover Background -->
                    <div class="absolute inset-0 rounded-xl bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity duration-200 border border-white/5"></div>
                @endif
                
                <!-- Icon Container -->
                <div class="relative flex h-10 w-10 items-center justify-center rounded-lg flex-shrink-0 transition-all duration-200 {{ $isActive ? 'bg-white/20 shadow-md' : 'bg-white/5 group-hover:bg-white/10' }}">
                    <svg class="h-5 w-5 transition-all duration-200 {{ $isActive ? 'text-white scale-110' : 'text-slate-300 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons[$item['icon']] }}" />
                    </svg>
                </div>
                
                <!-- Text -->
                <span class="relative overflow-hidden transition-all duration-300 whitespace-nowrap {{ $isActive ? 'text-white' : 'text-slate-300 group-hover:text-white' }}" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">{{ $item['name'] }}</span>
            </a>
        @endforeach
    </nav>

    <!-- Bottom Section -->
    <div class="mt-auto border-t border-white/5">
        <!-- Logout Button -->
        <div class="p-3">
            <a
                href="#"
                class="group relative flex items-center rounded-xl py-3 text-sm font-medium transition-all duration-200 text-slate-300 hover:text-white mx-2"
                :class="sidebarCollapsed ? 'justify-center px-2' : 'gap-3 px-4'"
                :title="sidebarCollapsed ? 'Logout' : ''"
            >
                <div class="absolute inset-0 rounded-xl bg-red-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-200 border border-red-500/20"></div>
                <div class="relative flex h-10 w-10 items-center justify-center rounded-lg flex-shrink-0 bg-white/5 group-hover:bg-red-500/20 transition-all duration-200">
                    <svg class="h-5 w-5 transition-transform duration-200 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </div>
                <span class="relative overflow-hidden transition-all duration-300 whitespace-nowrap" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">Logout</span>
            </a>
        </div>

        <!-- Collapse/Expand Toggle Button - Desktop Only -->
        <div class="hidden lg:flex items-center justify-center p-3">
            <button
                @click="sidebarCollapsed = !sidebarCollapsed"
                class="group flex items-center justify-center gap-2 w-full h-10 rounded-xl backdrop-blur-sm bg-white/5 hover:bg-white/10 border border-white/10 text-slate-300 hover:text-white transition-all duration-200 mx-2"
                :title="sidebarCollapsed ? 'Expand sidebar' : 'Collapse sidebar'"
            >
                <svg class="h-5 w-5 transition-transform duration-300 group-hover:scale-110" :class="sidebarCollapsed ? '' : 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-sm font-medium overflow-hidden transition-all duration-300 whitespace-nowrap" :class="sidebarCollapsed ? 'w-0 opacity-0' : 'w-auto opacity-100'">Collapse</span>
            </button>
        </div>
    </div>
</aside>
