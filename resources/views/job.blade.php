<x-layout>
<section aria-label="Job details">
    <div class="glass rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
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

        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Ut enim ad minima veniam, quis nostrum exercitationem ullam. Ut enim ad minima veniam, quis nostrum exercitationem ullam.
        </p>
        <p>
        <strong>Qualifications:</strong>
        <ul class="list-disc list-inside mt-2 text-gray-600">
            <li>2+ years of experience in frontend development</li>
            <li>Strong knowledge of React and TypeScript</li>
            <li>Experience with REST APIs and Git</li>
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