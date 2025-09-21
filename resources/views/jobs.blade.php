<x-layout>

<section aria-label="Job listings" class="space-y-4 w-full">
    <ul class="space-y-4">
    @foreach ($jobs as $job)
        <li >
            <a href="/jobs/{{ $job['id'] }}" class="rounded-xl p-5 shadow hover:shadow-lg transition grid grid-cols-[1fr_auto] items-center  gap-4 mb-5">
                <div class="flex flex-col h-full">
                    <p class="text-sm uppercase tracking-wide text-purple-600 font-medium">{{ $job->employer->name }}</p>
                    <h2 class="text-lg font-semibold text-purple-900">{{ $job['title'] }}</h2>
                </div>
                <div class="text-right flex flex-col items-end gap-2">
                    <p class="text-sm font-medium text-purple-800">{{ $job['salary'] }} <div class="px-4 py-4">
                    @foreach($job->tags as $tag)
                        <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5
                        rounded-full">{{ $tag->name }}</span>
                    @endforeach
                    </div>
                </div>
            </a>
        </li>
    @endforeach
    </ul>
</section>
</x-layout>