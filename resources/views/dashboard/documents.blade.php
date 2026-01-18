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
                </div>
            </div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
        </div>

        <!-- Upload Document Section -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 sm:p-8">
            <h2 class="text-2xl font-bold text-[#334155] mb-6">Upload Document</h2>
            
            <form @submit.prevent="uploadDocument()" class="space-y-6">
                <!-- Drag and Drop Zone -->
                <div>
                    <label for="document" class="block text-sm font-semibold text-[#334155] mb-3">
                        Select Document <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="file" 
                        id="document"
                        @change="handleFileSelect($event)"
                        @dragover.prevent="isDragging = true"
                        @dragleave.prevent="isDragging = false"
                        @drop.prevent="handleDrop($event)"
                        accept=".pdf,.xls,.xlsx,.doc,.docx"
                        required
                        class="hidden"
                        ref="fileInput"
                    >
                    <div 
                        @click="$refs.fileInput.click()"
                        @dragover.prevent="isDragging = true"
                        @dragleave.prevent="isDragging = false"
                        @drop.prevent="handleDrop($event)"
                        :class="[
                            'relative border-2 border-dashed rounded-xl p-8 sm:p-12 cursor-pointer transition-all duration-300',
                            isDragging ? 'border-[#4338ca] bg-blue-50 scale-[1.02]' : 'border-gray-300 hover:border-[#4338ca] hover:bg-gray-50',
                            selectedFile ? 'border-green-400 bg-green-50' : ''
                        ]"
                    >
                        <div class="flex flex-col items-center justify-center text-center">
                            <!-- Upload Icon -->
                            <div :class="[
                                'p-4 rounded-full mb-4 transition-all',
                                selectedFile ? 'bg-green-100' : 'bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/10'
                            ]">
                                <svg class="h-12 w-12" :class="selectedFile ? 'text-green-600' : 'text-[#4338ca]'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                            </div>
                            
                            <!-- File Info or Placeholder -->
                            <template x-if="selectedFile">
                                <div class="w-full">
                                    <div class="flex items-center justify-center gap-3 mb-2">
                                        <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <p class="text-lg font-semibold text-gray-900" x-text="selectedFileName"></p>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-4" x-text="'Size: ' + formatFileSize(selectedFile.size)"></p>
                                    <button 
                                        type="button"
                                        @click.stop="$refs.fileInput.click()"
                                        class="text-sm text-[#4338ca] hover:text-[#6366f1] font-medium underline"
                                    >
                                        Change File
                                    </button>
                                </div>
                            </template>
                            
                            <template x-if="!selectedFile">
                                <div>
                                    <p class="text-lg font-semibold text-gray-900 mb-2">
                                        <span class="text-[#4338ca]">Click to upload</span> or drag and drop
                                    </p>
                                    <p class="text-sm text-gray-500 mb-4">No file chosen</p>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <!-- File Requirements -->
                    <div class="mt-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Supported formats: <span class="font-semibold text-[#334155]">PDF, XLS, XLSX, DOC, DOCX</span></span>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                </svg>
                                <span>Maximum file size: <span class="font-semibold text-[#334155]">10MB</span></span>
                            </div>
                        </div>
                    </div>
                    
                    <p x-show="errors.file" class="mt-3 text-sm text-red-600 flex items-center gap-2" x-text="errors.file">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </p>
                </div>

                <!-- Description Field -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-[#334155] mb-2">
                        Description
                        <span class="text-gray-500 text-xs font-normal">(Optional)</span>
                    </label>
                    <textarea 
                        id="description"
                        x-model="form.description"
                        rows="4"
                        placeholder="Brief description..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white text-[#334155] placeholder-gray-400 focus:ring-2 focus:ring-[#4338ca] focus:border-transparent transition-all resize-none"
                    ></textarea>
                </div>

                <!-- Upload Button -->
                <div class="flex justify-end pt-4 border-t border-gray-200">
                    <button 
                        type="submit"
                        :disabled="!selectedFile"
                        :class="[
                            'px-8 py-3 rounded-lg font-semibold transition-all shadow-sm',
                            selectedFile 
                                ? 'bg-[#4338ca] hover:bg-[#6366f1] text-white hover:shadow-md transform hover:scale-105' 
                                : 'bg-gray-300 text-gray-500 cursor-not-allowed'
                        ]"
                    >
                        <span class="flex items-center gap-2">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            Upload Document
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- My Documents Section -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 sm:p-6">
            <div class="flex items-center justify-between mb-4 sm:mb-6">
                <h2 class="text-lg sm:text-xl font-bold text-[#334155]">
                    My Documents (<span x-text="documents.length"></span>)
                </h2>
            </div>

            <!-- Documents List -->
            <div class="space-y-3 sm:space-y-4">
                <template x-if="documents.length === 0">
                    <div class="text-center py-8 sm:py-12">
                        <div class="relative mx-auto w-16 h-16 sm:w-20 sm:h-20 mb-4">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#4338ca]/20 to-[#6366f1]/10 rounded-full blur-xl"></div>
                            <div class="relative p-3 sm:p-4 bg-gradient-to-br from-[#4338ca]/10 to-[#6366f1]/5 rounded-full">
                                <svg class="h-10 w-10 sm:h-12 sm:w-12 text-[#4338ca]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-base sm:text-lg font-semibold text-gray-900 mb-1">No documents uploaded yet</p>
                        <p class="text-xs sm:text-sm text-gray-500">Upload your first document using the form above</p>
                    </div>
                </template>
                
                <template x-for="doc in documents" :key="doc.id">
                    <div class="group relative overflow-hidden rounded-xl border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 hover:to-purple-50 transition-all cursor-pointer shadow-sm hover:shadow-lg hover:-translate-y-0.5">
                        <div class="p-4 sm:p-6">
                            <div class="flex items-start gap-3 sm:gap-4">
                                <div :class="['p-3 sm:p-4 rounded-xl shadow-lg flex-shrink-0', doc.type === 'pdf' ? 'bg-gradient-to-br from-red-400 to-red-500' : doc.type === 'word' ? 'bg-gradient-to-br from-blue-400 to-blue-500' : doc.type === 'excel' ? 'bg-gradient-to-br from-green-400 to-green-500' : 'bg-gradient-to-br from-gray-400 to-gray-500']">
                                    <svg class="h-6 w-6 sm:h-8 sm:w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-1 sm:mb-2 group-hover:text-[#4338ca] transition-colors break-words" x-text="doc.name"></h3>
                                    <p x-show="doc.description" class="text-xs sm:text-sm text-gray-600 mb-2 break-words" x-text="doc.description"></p>
                                    <div class="flex flex-wrap items-center gap-3 sm:gap-4 text-xs sm:text-sm text-gray-600">
                                        <div class="flex items-center gap-1.5 sm:gap-2">
                                            <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                            </svg>
                                            <span class="font-medium" x-text="doc.size"></span>
                                        </div>
                                        <div class="flex items-center gap-1.5 sm:gap-2">
                                            <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span class="font-medium" x-text="doc.date"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-1.5 sm:gap-2 flex-shrink-0">
                                    <button class="p-1.5 sm:p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-[#4338ca] transition-colors" title="Download">
                                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </button>
                                    <button @click="deleteDocument(doc.id)" class="p-1.5 sm:p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-red-600 transition-colors" title="Delete">
                                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script>
        function documentsApp() {
            return {
                form: {
                    description: ''
                },
                selectedFileName: '',
                selectedFile: null,
                isDragging: false,
                errors: {
                    file: ''
                },
                documents: [],
                
                handleDrop(event) {
                    this.isDragging = false;
                    const files = event.dataTransfer.files;
                    if (files.length > 0) {
                        const fileInput = this.$refs.fileInput;
                        fileInput.files = files;
                        this.handleFileSelect({ target: fileInput });
                    }
                },
                
                handleFileSelect(event) {
                    const file = event.target.files[0];
                    if (file) {
                        // Validate file type
                        const allowedTypes = ['application/pdf', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                        const allowedExtensions = ['.pdf', '.xls', '.xlsx', '.doc', '.docx'];
                        const fileExtension = '.' + file.name.split('.').pop().toLowerCase();
                        
                        if (!allowedExtensions.includes(fileExtension)) {
                            this.errors.file = 'Invalid file type. Please select PDF, XLS, XLSX, DOC, or DOCX file.';
                            this.selectedFileName = '';
                            this.selectedFile = null;
                            this.isDragging = false;
                            event.target.value = '';
                            return;
                        }

                        // Validate file size (10MB = 10 * 1024 * 1024 bytes)
                        const maxSize = 10 * 1024 * 1024;
                        if (file.size > maxSize) {
                            this.errors.file = 'File size exceeds 10MB limit.';
                            this.selectedFileName = '';
                            this.selectedFile = null;
                            this.isDragging = false;
                            event.target.value = '';
                            return;
                        }

                        this.selectedFile = file;
                        this.selectedFileName = file.name;
                        this.errors.file = '';
                    }
                },

                uploadDocument() {
                    // Reset errors
                    this.errors = {
                        file: ''
                    };

                    // Validate file
                    if (!this.selectedFile) {
                        this.errors.file = 'Please select a file to upload.';
                        return;
                    }

                    // Here you would typically send the file to the server
                    // For now, we'll simulate adding it to the documents list
                    const fileExtension = this.selectedFile.name.split('.').pop().toLowerCase();
                    let fileType = 'other';
                    if (fileExtension === 'pdf') fileType = 'pdf';
                    else if (['doc', 'docx'].includes(fileExtension)) fileType = 'word';
                    else if (['xls', 'xlsx'].includes(fileExtension)) fileType = 'excel';

                    const newDocument = {
                        id: Date.now(),
                        name: this.selectedFile.name,
                        size: this.formatFileSize(this.selectedFile.size),
                        date: new Date().toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }),
                        type: fileType,
                        description: this.form.description || null
                    };

                    this.documents.push(newDocument);
                    
                    // Reset form
                    this.form.description = '';
                    this.selectedFileName = '';
                    this.selectedFile = null;
                    this.isDragging = false;
                    this.$refs.fileInput.value = '';

                    // Show success message
                    alert('Document uploaded successfully!');
                },

                formatFileSize(bytes) {
                    if (bytes === 0) return '0 Bytes';
                    const k = 1024;
                    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                    const i = Math.floor(Math.log(bytes) / Math.log(k));
                    return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
                },

                deleteDocument(id) {
                    if (confirm('Are you sure you want to delete this document?')) {
                        this.documents = this.documents.filter(doc => doc.id !== id);
                    }
                }
            }
        }
    </script>
</x-layouts.dashboard>
