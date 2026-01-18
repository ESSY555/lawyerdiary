<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="createNoteApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Create Note</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Add a new note to your collection</p>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
        </div>

        <!-- Form Section -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 sm:p-6">
            <form @submit.prevent="saveNote()" class="space-y-4 sm:space-y-6">
                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-xs sm:text-sm font-semibold text-[#334155] mb-2">
                        Title <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="title"
                        x-model="form.title"
                        required
                        placeholder="Enter note title"
                        class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent transition-all"
                    >
                    <p x-show="errors.title" class="mt-1 text-xs sm:text-sm text-red-600" x-text="errors.title"></p>
                </div>

                <!-- Content Field -->
                <div>
                    <label for="content" class="block text-xs sm:text-sm font-semibold text-[#334155] mb-2">
                        Content <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        id="content"
                        x-model="form.content"
                        required
                        rows="8"
                        placeholder="Enter note content"
                        class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent transition-all resize-none"
                    ></textarea>
                    <p x-show="errors.content" class="mt-1 text-xs sm:text-sm text-red-600" x-text="errors.content"></p>
                </div>

                <!-- Related Case Field -->
                <div>
                    <label for="relatedCase" class="block text-xs sm:text-sm font-semibold text-[#334155] mb-2">
                        Related Case
                        <span class="text-gray-500 text-xs font-normal">(Optional)</span>
                    </label>
                    <select 
                        id="relatedCase"
                        x-model="form.relatedCase"
                        class="w-full px-3 sm:px-4 py-2.5 sm:py-3 text-sm sm:text-base border border-gray-300 rounded-lg bg-white text-[#334155] focus:ring-2 focus:ring-[#4338ca] focus:border-transparent transition-all"
                    >
                        <option value="">Select Case</option>
                        <template x-for="caseItem in cases" :key="caseItem.id">
                            <option :value="caseItem.id" x-text="caseItem.name"></option>
                        </template>
                    </select>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-end gap-3 sm:gap-4 pt-4 border-t border-gray-200">
                    <a 
                        href="{{ route('dashboard.notes') }}"
                        class="px-4 sm:px-6 py-2 sm:py-2.5 border border-gray-300 rounded-lg text-sm sm:text-base text-[#334155] font-medium hover:bg-gray-50 transition-colors text-center"
                    >
                        Go Back
                    </a>
                    <button 
                        type="submit"
                        class="px-4 sm:px-6 py-2 sm:py-2.5 bg-[#4338ca] hover:bg-[#6366f1] text-white rounded-lg text-sm sm:text-base font-medium transition-colors shadow-sm hover:shadow-md w-full sm:w-auto"
                    >
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function createNoteApp() {
            return {
                form: {
                    title: '',
                    content: '',
                    relatedCase: ''
                },
                errors: {
                    title: '',
                    content: ''
                },
                cases: [
                    { id: 1, name: 'Ahmed vs. State' },
                    { id: 2, name: 'Fatima Enterprises' },
                    { id: 3, name: 'Property Dispute #2024' },
                    { id: 4, name: 'Contract Breach Case' },
                    { id: 5, name: 'Employment Dispute' },
                    { id: 6, name: 'Tax Appeal Case' },
                    { id: 7, name: 'Property Rights' },
                    { id: 8, name: 'Corporate Merger' },
                ],
                saveNote() {
                    // Reset errors
                    this.errors = {
                        title: '',
                        content: ''
                    };

                    // Validate form
                    let isValid = true;

                    if (!this.form.title || this.form.title.trim() === '') {
                        this.errors.title = 'Title is required';
                        isValid = false;
                    }

                    if (!this.form.content || this.form.content.trim() === '') {
                        this.errors.content = 'Content is required';
                        isValid = false;
                    }

                    if (!isValid) {
                        return;
                    }

                    // Here you would typically send the data to the server
                    // For now, we'll just log it and redirect
                    console.log('Saving note:', this.form);
                    
                    // Simulate save and redirect
                    alert('Note saved successfully!');
                    window.location.href = '{{ route('dashboard.notes') }}';
                }
            }
        }
    </script>
</x-layouts.dashboard>
