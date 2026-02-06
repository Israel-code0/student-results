<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Add Student</h1>

        <form method="POST" action="/students">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Matric Number</label>
                <input type="text" name="matric_no" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Department</label>
                <input type="text" name="department" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Level</label>
                <input type="text" name="level" class="border w-full p-2">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2">
                Save Student
            </button>
        </form>
    </div>
</x-app-layout>
