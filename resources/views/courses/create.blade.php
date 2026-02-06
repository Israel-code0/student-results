<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Add Course</h1>

        <form method="POST" action="/courses">
            @csrf

            <div class="mb-3">
                <label>Course Title</label>
                <input type="text" name="name" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Code</label>
                <input type="text" name="code" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Unit</label>
                <input type="number" name="unit" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Semester</label>
                <input type="text" name="semester" class="border w-full p-2">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2">Save Course</button>
        </form>
    </div>
</x-app-layout>
