<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
                <h2 class="text-gray-500">Students</h2>
                <p class="text-3xl font-bold">{{ $studentsCount }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
                <h2 class="text-gray-500">Courses</h2>
                <p class="text-3xl font-bold">{{ $coursesCount }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
                <h2 class="text-gray-500">Results</h2>
                <p class="text-3xl font-bold">{{ $resultsCount }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
                <h2 class="text-gray-500">Average GPA</h2>
                <p class="text-3xl font-bold">{{ $averageGpa }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
