<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Student</h1>

        <form method="POST" action="/students/{{ $student->id }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $student->name }}" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Matric Number</label>
                <input type="text" name="matric_no" value="{{ $student->matric_no }}" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Department</label>
                <input type="text" name="department" value="{{ $student->department }}" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Level</label>
                <input type="text" name="level" value="{{ $student->level }}" class="border w-full p-2">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2">Update Student</button>
        </form>
    </div>
</x-app-layout>
