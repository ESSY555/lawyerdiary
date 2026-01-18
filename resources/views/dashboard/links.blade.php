<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="linksApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Useful Links</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Quick access to important resources</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="flex items-center gap-2 px-5 py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Link
                        </button>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6">
            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Links</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="links.length"></p>
                    <p class="text-xs text-gray-500">Saved links</p>
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
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Categories</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="categories.length"></p>
                    <p class="text-xs text-gray-500">Link categories</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#f97316]/10 to-[#fb923c]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#f97316] to-[#fb923c] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Most Used</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="mostUsed.length"></p>
                    <p class="text-xs text-gray-500">Frequently accessed</p>
                </div>
            </div>
        </div>

        <!-- Links List -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div class="flex items-center gap-2 bg-gray-100 rounded-lg p-1">
                    <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">All</button>
                    <template x-for="cat in categories" :key="cat">
                        <button @click="activeTab = cat" :class="activeTab === cat ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all" x-text="cat"></button>
                    </template>
                </div>
                <div class="relative flex-1 max-w-md">
                    <input type="text" x-model="searchQuery" placeholder="Search links..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="space-y-4">
                <template x-for="link in filteredLinks" :key="link.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-start gap-4 flex-1">
                                    <div class="p-3 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg flex-shrink-0">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-[#4338ca] transition-colors" x-text="link.name"></h3>
                                        <p class="text-sm text-gray-600 mb-2 truncate" x-text="link.url"></p>
                                        <div class="flex items-center gap-2">
                                            <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs font-medium" x-text="link.category"></span>
                                            <span class="text-xs text-gray-500" x-text="link.description"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <a :href="link.url" target="_blank" class="p-2 rounded-lg bg-[#4338ca] text-white hover:bg-[#6366f1] transition-colors">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
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
                </template>
                <div x-show="filteredLinks.length === 0" class="text-center py-12">
                    <div class="relative mx-auto w-20 h-20 mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                        <div class="relative p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                            <svg class="h-12 w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 mb-1">No links found</p>
                    <p class="text-sm text-gray-500">Try adjusting your filters or search query</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function linksApp() {
            return {
                activeTab: 'all',
                searchQuery: '',
                links: [
                    { id: 1, name: 'Supreme Court of Pakistan', url: 'https://www.supremecourt.gov.pk', category: 'Courts', description: 'Official website of the Supreme Court' },
                    { id: 2, name: 'Law & Justice Commission', url: 'https://www.ljcp.gov.pk', category: 'Government', description: 'Legal research and reform' },
                    { id: 3, name: 'Pakistan Law Site', url: 'https://www.pakistanlawsite.com', category: 'Legal Resources', description: 'Legal database and resources' },
                    { id: 4, name: 'Bar Council', url: 'https://www.pbc.org.pk', category: 'Professional', description: 'Pakistan Bar Council' },
                    { id: 5, name: 'Legal Research Portal', url: 'https://www.legalresearch.pk', category: 'Legal Resources', description: 'Legal research tools' },
                    { id: 6, name: 'Court Services', url: 'https://www.courtservices.gov.pk', category: 'Courts', description: 'Court services and information' },
                ],
                get categories() {
                    return ['all', ...new Set(this.links.map(l => l.category))];
                },
                get mostUsed() {
                    return this.links.slice(0, 3);
                },
                get filteredLinks() {
                    let filtered = this.activeTab === 'all' ? this.links : this.links.filter(l => l.category === this.activeTab);
                    if (this.searchQuery) {
                        const q = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(l => l.name.toLowerCase().includes(q) || l.url.toLowerCase().includes(q) || l.category.toLowerCase().includes(q));
                    }
                    return filtered;
                }
            }
        }
    </script>
</x-layouts.dashboard>
