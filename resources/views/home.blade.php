<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            <div class="bg-slate-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-slate-900">
                    <h6 class="text-xl font-bold text-white">Public quizzes</h6>

                    @forelse($public_quizzes as $quiz)
                        <div class="px-4 py-2 w-full lg:w-6/12 xl:w-3/12">
                            <a href="{{ route('quiz.show', $quiz->slug) }}">
                                <div
                                    class="flex relative flex-col mb-6 min-w-0 break-words bg-white text-slate-900 rounded shadow-lg xl:mb-0">
                                    <div class="flex-auto p-4">
                                        <p>{{ $quiz->title }}</p>
                                        <p class="text-sm">Questions: <span>{{ $quiz->questions_count }}</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="mt-2 text-gray-300">No public quizzes found.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            <div class="bg-slate-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h6 class="text-xl text-white font-bold">Quizzes for Registered Users</h6>

                    @forelse($registered_only_quizzes as $quiz)
                        <div class="px-4 py-2 w-full lg:w-6/12 xl:w-3/12">
                        <a href="{{ route('quiz.show', $quiz->slug) }}">
                                <div
                                    class="flex relative flex-col mb-6 min-w-0 break-words bg-white text-slate-900 rounded shadow-lg xl:mb-0">
                                    <div class="flex-auto p-4">
                                        <p>{{ $quiz->title }}</p>
                                        <p class="text-sm">Questions: <span>{{ $quiz->questions_count }}</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="mt-2 text-gray-300">No quizzes for registered users found.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
