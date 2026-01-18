<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Lawyer Diary - Digital Management' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen overflow-hidden" x-data="{ sidebarCollapsed: false, sidebarOpen: false }" x-init="if (window.innerWidth >= 1024) sidebarOpen = true" @resize.window.debounce.250ms="if (window.innerWidth >= 1024) sidebarOpen = true; else sidebarOpen = false">
        <!-- Mobile Overlay -->
        <div 
            x-show="sidebarOpen"
            @click="sidebarOpen = false"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black/50 z-40 lg:hidden"
            style="display: none;"
        ></div>

        <!-- Sidebar -->
        <x-sidebar :active="$active ?? ''" />
        
        <main class="flex-1 overflow-y-auto relative w-full">
            <!-- Hamburger Button - Mobile Only -->
            <button
                x-show="!sidebarOpen"
                @click="sidebarOpen = true"
                class="lg:hidden fixed top-4 left-4 z-50 p-2.5 rounded-lg bg-[#4338ca] text-white shadow-lg hover:bg-[#6366f1] transition-colors"
                style="display: none;"
            >
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="h-full p-4 sm:p-6 w-full lg:w-11/12 mx-auto">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</body>
</html>
