<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Results</h1>

        <a href="/results/create" class="bg-green-600 text-white px-4 py-2 mb-4 inline-block">Add Result</a>

        <table class="border w-full">
            <tr class="border">
                <th>Student</th>
                <th>Course</th>
                <th>Score</th>
                <th>Grade</th>
                <th>Grade Point</th>
            </tr>

            @foreach ($results as $result)
                <tr class="border">
                    <td>{{ $result->student->name }}</td>
                    <td>{{ $result->course->name }}</td>
                    <td>{{ $result->score }}</td>
                    <td>{{ $result->grade }}</td>
                    <td>{{ $result->grade_point }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
