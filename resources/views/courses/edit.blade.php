<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Course</h1>

        <form method="POST" action="/courses/{{ $course->id }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $course->name }}" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Code</label>
                <input type="text" name="code" value="{{ $course->code }}" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Unit</label>
                <input type="number" name="unit" value="{{ $course->unit }}" class="border w-full p-2">
            </div>

            <div class="mb-3">
                <label>Semester</label>
                <input type="text" name="semester" value="{{ $course->semester }}" class="border w-full p-2">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2">Update Course</button>
        </form>
    </div>
</x-app-layout>
