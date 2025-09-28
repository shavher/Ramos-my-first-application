<x-layout>
    <div class = " flex justify-end ">
    <a href = "/jobs/create">
        <button id="openCreateBtn" class="inline-flex items-center w-[150px]  gap-2 px-4 py-2 bg-purple-700 text-white rounded-full shadow hover:bg-purple-800 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
            </svg>
            Create Job
        </button>
    </a>
    </div>
    <section aria-label="Job listings" class="space-y-4 w-full">
        <ul class="space-y-4 mt-5">
        @foreach ($jobs as $job)
            <li >
                <a href="/jobs/{{ $job['id'] }}" class="rounded-xl p-5 shadow hover:shadow-fuchsia-500   transition grid grid-cols-[1fr_auto] items-center  gap-4 mb-5">
                    <div class="flex flex-col h-full">
                        <p class="text-sm uppercase tracking-wide text-purple-600 font-medium">{{ $job->employer->name }}</p>
                        <h2 class="text-lg font-semibold text-purple-900">{{ $job['title'] }}</h2>
                    </div>
                    <div class="text-right flex flex-col items-end gap-2">
                        <p class="text-sm font-medium text-purple-800">{{ $job['salary'] }} <div class="px-4 py-4">
                        @foreach($job->tags as $tag)
                            <span class="bg-gray-200 text-gray-700 text-s font-semibold mr-2 px-2.5 py-0.5
                            rounded-full">{{ $tag->name }}</span>
                        @endforeach
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
        </ul>
        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    </section>
</x-layout>