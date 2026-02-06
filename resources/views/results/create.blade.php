<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Add Result</h1>

        <form method="POST" action="/results">
            @csrf

            <div class="mb-3">
                <label>Student</label>
                <select name="student_id" class="border w-full p-2">
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Course</label>
                <select name="course_id" class="border w-full p-2">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Score (0-100)</label>
                <input type="number" name="score" min="0" max="100" class="border w-full p-2">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2">Save Result</button>
        </form>
    </div>
</x-app-layout>
