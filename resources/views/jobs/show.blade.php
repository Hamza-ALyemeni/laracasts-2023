<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
        <div class="mb-4 mt-4 p-4 border border-gray-300 rounded-lg shadow-sm">
            <h2 class="text-xl font-semibold text-gray-800">{{ $job['title']; }}</h2>
            <p class="text-gray-600">${{ $job['salary']; }}</p>
        </div>

        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
</x-layout>
