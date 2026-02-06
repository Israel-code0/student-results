<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Students</h1>

        <a href="/students/create"
           class="bg-green-600 text-white px-4 py-2 mb-4 inline-block">
            Add Student
        </a>

        <table class="border w-full">
            <tr class="border">
                <th>Name</th>
                <th>Matric No</th>
                <th>Department</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>


        @foreach ($students as $student)
                <tr class="border">
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->matric_no }}</td>
                    <td>{{ $student->department }}</td>
                    <td>{{ $student->level }}</td>
                    <td class="flex gap-2">
                        <a href="/students/{{ $student->id }}/edit" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>

                        <a href="/students/{{ $student->id }}/gpa" class="bg-purple-600 text-white px-2 py-1 rounded">
                            View GPA
                        </a>

                        <form action="/students/{{ $student->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
