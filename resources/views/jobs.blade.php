<x-layout>

<section aria-label="Job listings" class="space-y-4 w-full">
    <ul class="space-y-4">
    @foreach ($jobs as $job)
        <li class=" rounded-xl p-4 shadow hover:shadow-lg transition grid grid-cols-[1fr_auto] items-center gap-4 mb-5">
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">

                <div class="flex flex-col">
                    <h2 class="text-lg font-semibold text-purple-900">{{ $job['title'] }}</h2>
                </div>
                <div class="text-right flex flex-col items-end gap-2">
                    <p class="text-sm font-medium text-purple-800">Pays {{ $job['salary'] }} per year.</p>
                </div>
            </a>
        </li>
    @endforeach
    </ul>
</section>
</x-layout>