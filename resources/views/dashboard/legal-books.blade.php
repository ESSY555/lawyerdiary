<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="legalBooksApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Legal Books</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Access legal references and books</p>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Books</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="books.length"></p>
                    <p class="text-xs text-gray-500">Available books</p>
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
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Available</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="books.length"></p>
                    <p class="text-xs text-gray-500">Ready to access</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#f97316]/10 to-[#fb923c]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#f97316] to-[#fb923c] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Categories</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="categories.length"></p>
                    <p class="text-xs text-gray-500">Book categories</p>
                </div>
            </div>
        </div>

        <!-- Books Grid -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div class="relative flex-1 max-w-md">
                    <input type="text" x-model="searchQuery" placeholder="Search books..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#4338ca] focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="book in filteredBooks" :key="book.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-6">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="p-4 rounded-xl bg-gradient-to-br from-[#4338ca] to-[#6366f1] shadow-lg flex-shrink-0">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-[#4338ca] transition-colors" x-text="book.title"></h3>
                                    <p class="text-sm text-gray-500 mb-2" x-text="book.author"></p>
                                    <span class="inline-block px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs font-medium" x-text="book.category"></span>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 line-clamp-2" x-text="book.description"></p>
                            <button class="w-full px-4 py-2 bg-[#4338ca] text-white rounded-lg hover:bg-[#6366f1] transition-colors text-sm font-medium">View Book</button>
                        </div>
                    </div>
                </template>
                <div x-show="filteredBooks.length === 0" class="col-span-full text-center py-12">
                    <div class="relative mx-auto w-20 h-20 mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                        <div class="relative p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                            <svg class="h-12 w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 mb-1">No books found</p>
                    <p class="text-sm text-gray-500">Try adjusting your search query</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function legalBooksApp() {
            return {
                searchQuery: '',
                books: [
                    { id: 1, title: 'Pakistan Penal Code (PPC)', author: 'Official Publication', category: 'Criminal Law', description: 'Complete text of the Pakistan Penal Code with amendments and case law references.' },
                    { id: 2, title: 'Code of Criminal Procedure (CrPC)', author: 'Official Publication', category: 'Criminal Law', description: 'Comprehensive guide to criminal procedure in Pakistan with latest amendments.' },
                    { id: 3, title: 'Constitution of Pakistan', author: 'Official Publication', category: 'Constitutional Law', description: 'Complete text of the Constitution of Pakistan with all amendments and interpretations.' },
                    { id: 4, title: 'Contract Act 1872', author: 'Official Publication', category: 'Contract Law', description: 'Complete text of the Contract Act with case law and legal commentary.' },
                    { id: 5, title: 'Transfer of Property Act', author: 'Official Publication', category: 'Property Law', description: 'Comprehensive guide to property transfer laws in Pakistan.' },
                    { id: 6, title: 'Family Laws in Pakistan', author: 'Legal Experts', category: 'Family Law', description: 'Complete guide to family laws including marriage, divorce, and inheritance.' },
                ],
                get categories() {
                    return [...new Set(this.books.map(b => b.category))];
                },
                get filteredBooks() {
                    if (!this.searchQuery) return this.books;
                    const q = this.searchQuery.toLowerCase();
                    return this.books.filter(b => b.title.toLowerCase().includes(q) || b.author.toLowerCase().includes(q) || b.category.toLowerCase().includes(q));
                }
            }
        }
    </script>
</x-layouts.dashboard>
