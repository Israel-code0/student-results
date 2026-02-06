<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Courses</h1>

        <a href="/courses/create" class="bg-green-600 text-white px-4 py-2 mb-4 inline-block">Add Course</a>

        <table class="border w-full">
            <tr class="border">
                <th>Course Title</th>
                <th>Code</th>
                <th>Unit</th>
                <th>Semester</th>
                <th>Actions</th>
            </tr>

            @foreach ($courses as $course)
                <tr class="border">
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->unit }}</td>
                    <td>{{ $course->semester }}</td>
                    <td class="flex gap-2">
                        <a href="/courses/{{ $course->id }}/edit" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="/courses/{{ $course->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
