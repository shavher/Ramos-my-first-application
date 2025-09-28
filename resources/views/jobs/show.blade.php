<x-layout>
<div class = " flex justify-end ">
    <a href = "/jobs/{{ $job['id'] }}/edit">
        <button id="openCreateBtn" class="inline-flex items-center w-[120px]  gap-2 px-4 py-2 bg-purple-700 text-white rounded-full shadow hover:bg-purple-800 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
            </svg>
            Edit Job
        </button>
    </a>
</div>
<section aria-label="Job details mt-5 ">
    <div class="glass rounded-2xl p-8  shadow-fuchsia-700 hover:shadow-xl transition ">
    <!-- Top row: employer + title / salary + tags -->
        <div class="grid grid-cols-[1fr_auto] gap-6 items-start">
            <div>
                <p class="text-sm uppercase tracking-wide text-purple-600 font-medium">{{ $job->employer->name }}</p>
                <h2 class="text-2xl font-bold text-purple-900">{{ $job['title'] }}</h2>
                <p class="mt-1 text-sm text-gray-600">{{ $job['salary'] }}</p>
            </div>
        <div class="text-right flex flex-col items-end gap-3">
            <div class="flex flex-wrap justify-end gap-2 mt-1">
                <span class="text-xs px-3 py-1 rounded-full bg-purple-100 text-purple-700">React</span>
                <span class="text-xs px-3 py-1 rounded-full bg-purple-100 text-purple-700">TypeScript</span>
                <span class="text-xs px-3 py-1 rounded-full bg-purple-100 text-purple-700">Remote</span>
            </div>
        </div>
    </div>
<!-- Divider -->
    <hr class="my-6 border-purple-200">
<!-- Job description -->
    <div class="text-gray-700 leading-relaxed space-y-4">
        <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Consectetur, adipisci velit, sed quia non numquam eius modi tempora.
        </p>
        <p>
        <strong>Qualifications:</strong>
        <ul class="list-disc list-inside mt-2 text-gray-600">
            <li>2+ years of experience in frontend development</li>
            <li>Excellent communication skills</li>
        </ul>
        </p>
    </div>

<!-- Apply button -->
<div class="mt-8 text-center">
<a href="#apply" class="px-6 py-3 bg-purple-700 text-white rounded-full shadow hover:bg-purple-800 transition">
Apply Now
</a>
</div>
</div>

</section>

</x-layout>