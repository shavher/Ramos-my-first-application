<x-layout>
<x-slot:heading>
Edit Job
</x-slot:heading>
<form method="POST" action="/jobs/{{ $job->id }}">
@csrf
@method('PATCH')
    <div class="space-y-12 flex justify-center">
        <div class="border-2 shadow-xl shadow-fuchsia-500/50 border-b-fuchsia-600 w-[500px]  p-10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New
            Job</h2>
            <p class="mt-1 text-n leading-6 text-purple-700">We just need a handful of
            details from you.</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                <label for="title" class="block text-sm font-medium leading-6
                text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300
                        focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600
                        sm:max-w-md">
                            <input type="text" name="title" id="title" class="block flex-1 border-0
                            bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0
                            sm:text-sm sm:leading-6" value="{{ $job->title }}" >
                        </div>
                    </div>
                    @error('title')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-4">
                <label for="salary" class="block text-sm font-medium leading-6
                text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300
                        focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600
                        sm:max-w-md">
                            <input type="text" name="salary" id="salary" class="block flex-1
                            border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400
                            focus:ring-0 sm:text-sm sm:leading-6" value="{{ $job->salary }}" >
                        </div>
                    </div>
                    @error('salary')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 flex ml-[290px] items-center justify-end gap-x-6 w-[500px]">
        <button type="button" class="text-sm font-semibold leading-6
        text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-fuchsia-600 px-3 py-2 text-sm
        font-semibold text-white shadow-sm hover:bg-indigo-500 
        focus-visible:outline-2 focus-visible:outline-offset-2
        focus-visible:outline-indigo-600">Save</button>
        <button form="delete-form" class="text-red-500">Delete</button>
    </div>
    
</form>
<form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
@csrf
@method('DELETE')
</form>
</x-layout>