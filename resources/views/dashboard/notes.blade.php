<x-layouts.dashboard :title="$title" :active="$active">
    <div class="space-y-6" x-data="notesApp()">
        <!-- Header with Gradient -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#4338ca] via-[#6366f1] to-[#8b5cf6] p-6 sm:p-8 text-white shadow-2xl">
            <div class="relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2">Notes & Tasks</h1>
                        <p class="text-blue-100 text-base sm:text-lg">Keep track of important notes and tasks</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('dashboard.notes.create') }}" class="flex items-center gap-2 px-5 py-2.5 bg-white text-[#4338ca] rounded-lg hover:bg-blue-50 transition-all font-semibold shadow-lg hover:shadow-xl hover:scale-105 active:scale-95">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            New Note
                        </a>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Total Notes</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="notes.length"></p>
                    <p class="text-xs text-gray-500">All notes</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#f97316]/10 to-[#fb923c]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#f97316] to-[#fb923c] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Pending Tasks</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="pendingTasks.length"></p>
                    <p class="text-xs text-gray-500">To be completed</p>
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
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Completed</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="completedTasks.length"></p>
                    <p class="text-xs text-gray-500">Finished tasks</p>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#6366f1]/10 to-[#8b5cf6]/5 rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 rounded-xl bg-gradient-to-br from-[#6366f1] to-[#8b5cf6] shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-600 mb-1">Due Today</h3>
                    <p class="text-3xl font-bold text-gray-900 mb-1" x-text="dueToday.length"></p>
                    <p class="text-xs text-gray-500">Urgent tasks</p>
                </div>
            </div>
        </div>

        <!-- Notes and Tasks Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Notes Section -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Notes</h2>
                        <p class="text-sm text-gray-500">Your important notes</p>
                    </div>
                    <a href="{{ route('dashboard.notes.create') }}" class="p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-[#4338ca] transition-colors">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </a>
                </div>
                <div class="space-y-3">
                    <template x-for="note in notes" :key="note.id">
                        <div class="group relative overflow-hidden rounded-lg border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 transition-all cursor-pointer">
                            <div class="p-4">
                                <div class="flex items-start gap-3">
                                    <div class="p-2 rounded-lg bg-gradient-to-br from-[#4338ca] to-[#6366f1] flex-shrink-0">
                                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-semibold text-gray-900 mb-1 group-hover:text-[#4338ca] transition-colors" x-text="note.title"></p>
                                        <p class="text-sm text-gray-600 mb-2 line-clamp-2" x-text="note.content"></p>
                                        <p class="text-xs text-gray-500" x-text="note.date"></p>
                                    </div>
                                    <button @click.stop="deleteNote(note.id)" class="p-1 rounded hover:bg-gray-100 text-gray-400 hover:text-red-600 transition-colors opacity-0 group-hover:opacity-100">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                    <div x-show="notes.length === 0" class="text-center py-8">
                        <p class="text-sm text-gray-500">No notes yet</p>
                    </div>
                </div>
            </div>

            <!-- Tasks Section -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Tasks</h2>
                        <p class="text-sm text-gray-500">Your pending tasks</p>
                    </div>
                    <button @click="showTaskModal = true" class="p-2 rounded-lg hover:bg-gray-100 text-gray-600 hover:text-[#4338ca] transition-colors">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </div>
                <div class="space-y-3">
                    <template x-for="task in tasks" :key="task.id">
                        <div class="group relative overflow-hidden rounded-lg border-2 border-gray-200 hover:border-[#4338ca] bg-gradient-to-r from-white to-gray-50 hover:from-blue-50 transition-all cursor-pointer">
                            <div class="p-4">
                                <div class="flex items-start gap-3">
                                    <button @click.stop="toggleTask(task.id)" class="mt-0.5 flex-shrink-0">
                                        <div :class="['w-5 h-5 rounded border-2 flex items-center justify-center transition-all', task.completed ? 'bg-[#16a34a] border-[#16a34a]' : 'border-gray-300 hover:border-[#4338ca]']">
                                            <svg x-show="task.completed" class="h-3 w-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </button>
                                    <div class="flex-1 min-w-0">
                                        <p :class="['font-semibold mb-1 group-hover:text-[#4338ca] transition-colors', task.completed ? 'text-gray-400 line-through' : 'text-gray-900']" x-text="task.title"></p>
                                        <p class="text-xs text-gray-500 mb-2" x-text="'Due: ' + task.dueDate"></p>
                                        <div class="flex items-center gap-2">
                                            <span :class="['px-2 py-0.5 rounded text-xs font-medium', task.priority === 'high' ? 'bg-red-100 text-red-700' : task.priority === 'medium' ? 'bg-yellow-100 text-yellow-700' : 'bg-gray-100 text-gray-700']" x-text="task.priority"></span>
                                        </div>
                                    </div>
                                    <button @click.stop="deleteTask(task.id)" class="p-1 rounded hover:bg-gray-100 text-gray-400 hover:text-red-600 transition-colors opacity-0 group-hover:opacity-100">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                    <div x-show="tasks.length === 0" class="text-center py-8">
                        <p class="text-sm text-gray-500">No tasks yet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function notesApp() {
            return {
                showNoteModal: false,
                showTaskModal: false,
                notes: [
                    { id: 1, title: 'Meeting notes from client consultation', content: 'Discussed case strategy and next steps. Client agreed to provide additional documents by next week.', date: '2 days ago' },
                    { id: 2, title: 'Court hearing preparation', content: 'Review all case documents and prepare questions for witnesses.', date: '5 days ago' },
                    { id: 3, title: 'Important legal precedents', content: 'Research similar cases and note relevant legal precedents for upcoming case.', date: '1 week ago' },
                ],
                tasks: [
                    { id: 1, title: 'Review case documents', dueDate: 'Tomorrow', priority: 'high', completed: false },
                    { id: 2, title: 'Prepare witness statements', dueDate: 'Dec 25, 2024', priority: 'medium', completed: false },
                    { id: 3, title: 'File motion for extension', dueDate: 'Dec 22, 2024', priority: 'high', completed: false },
                    { id: 4, title: 'Contact client for update', dueDate: 'Dec 20, 2024', priority: 'low', completed: true },
                ],
                get pendingTasks() { return this.tasks.filter(t => !t.completed); },
                get completedTasks() { return this.tasks.filter(t => t.completed); },
                get dueToday() { return this.tasks.filter(t => !t.completed && t.dueDate === 'Tomorrow'); },
                toggleTask(id) {
                    const task = this.tasks.find(t => t.id === id);
                    if (task) task.completed = !task.completed;
                },
                deleteNote(id) {
                    this.notes = this.notes.filter(n => n.id !== id);
                },
                deleteTask(id) {
                    this.tasks = this.tasks.filter(t => t.id !== id);
                }
            }
        }
    </script>
</x-layouts.dashboard>
