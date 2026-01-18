<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="documentsApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Documents</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Manage all your legal documents</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="hidden sm:flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-lg hover:bg-white/30 transition-all text-white font-medium">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            Filter
                        </button>
                        <button class="flex items-center gap-2 px-5 py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            Upload Document
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Documents</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="documents.length"></p>
                    <p class="text-xs text-gray-500">All files</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#f97316]/10 to-[#fb923c]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#f97316] to-[#fb923c] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">PDF Files</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="pdfFiles.length"></p>
                    <p class="text-xs text-gray-500">PDF documents</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#16a34a]/10 to-[#22c55e]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#16a34a] to-[#22c55e] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Word Docs</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="wordFiles.length"></p>
                    <p class="text-xs text-gray-500">Word documents</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#6366f1]/10 to-[#8b5cf6]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#6366f1] to-[#8b5cf6] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Size</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="totalSize"></p>
                    <p class="text-xs text-gray-500">Storage used</p>
                </div>
            </div>
        </div>

        <!-- Documents List -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div class="flex items-center gap-2 bg-gray-100 rounded-lg p-1">
                    <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">All</button>
                    <button @click="activeTab = 'pdf'" :class="activeTab === 'pdf' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">PDF</button>
                    <button @click="activeTab = 'word'" :class="activeTab === 'word' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">Word</button>
                    <button @click="activeTab = 'other'" :class="activeTab === 'other' ? 'bg-white text-[#4338ca] shadow-md' : 'text-gray-600 hover:text-gray-900'" class="px-4 py-2 rounded-md text-sm font-semibold transition-all">Other</button>
                </div>
                <div class="relative flex-1 max-w-md">
                    <input type="text" x-model="searchQuery" placeholder="Search documents..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="space-y-4">
                <template x-for="doc in filteredDocuments" :key="doc.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-6">
                            <div class="flex items-center gap-4">
                                <div :class="['p-4 rounded-xl shadow-lg flex-shrink-0', doc.type === 'pdf' ? 'bg-gradient-to-br from-red-400 to-red-500' : doc.type === 'word' ? 'bg-gradient-to-br from-blue-400 to-blue-500' : 'bg-gradient-to-br from-gray-400 to-gray-500']">
                                    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-[#4338ca] transition-colors" x-text="doc.name"></h3>
                                    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                        <div class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                            </svg>
                                            <span x-text="doc.size"></span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span x-text="doc.date"></span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                            </svg>
                                            <span x-text="doc.category"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-[#4338ca] transition-colors">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
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
                <div x-show="filteredDocuments.length === 0" class="text-center py-12">
                    <div class="relative mx-auto w-20 h-20 mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                        <div class="relative p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                            <svg class="h-12 w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 mb-1">No documents found</p>
                    <p class="text-sm text-gray-500">Try adjusting your filters or search query</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function documentsApp() {
            return {
                activeTab: 'all',
                searchQuery: '',
                documents: [
                    { id: 1, name: 'Contract Agreement.pdf', size: '2.4 MB', date: 'Jan 15, 2024', type: 'pdf', category: 'Contracts' },
                    { id: 2, name: 'Court Order.docx', size: '1.8 MB', date: 'Jan 14, 2024', type: 'word', category: 'Court Documents' },
                    { id: 3, name: 'Client Statement.pdf', size: '3.2 MB', date: 'Jan 13, 2024', type: 'pdf', category: 'Client Files' },
                    { id: 4, name: 'Legal Brief.docx', size: '1.5 MB', date: 'Jan 12, 2024', type: 'word', category: 'Legal Documents' },
                    { id: 5, name: 'Evidence Report.pdf', size: '4.1 MB', date: 'Jan 10, 2024', type: 'pdf', category: 'Evidence' },
                    { id: 6, name: 'Settlement Agreement.pdf', size: '2.9 MB', date: 'Jan 8, 2024', type: 'pdf', category: 'Contracts' },
                ],
                get pdfFiles() { return this.documents.filter(d => d.type === 'pdf'); },
                get wordFiles() { return this.documents.filter(d => d.type === 'word'); },
                get totalSize() {
                    const sizes = this.documents.map(d => parseFloat(d.size));
                    const total = sizes.reduce((a, b) => a + b, 0);
                    return total.toFixed(1) + ' MB';
                },
                get filteredDocuments() {
                    let filtered = this.activeTab === 'all' ? this.documents : this.documents.filter(d => d.type === this.activeTab);
                    if (this.searchQuery) {
                        const q = this.searchQuery.toLowerCase();
                        filtered = filtered.filter(d => d.name.toLowerCase().includes(q) || d.category.toLowerCase().includes(q));
                    }
                    return filtered;
                }
            }
        }
    </script>
</x-layouts.dashboard>
