<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">{{ $student->name }} - GPA</h1>

        <h2>GPA for Semester: {{ $semester }}</h2>


        <table class="border w-full mb-4">
            <tr class="border">
                <th>Course</th>
                <th>Unit</th>
                <th>Score</th>
                <th>Grade</th>
                <th>Grade Point</th>
            </tr>

            @foreach ($results as $result)
                <tr class="border">
                    <td>{{ $result->course->name }}</td>
                    <td>{{ $result->course->unit }}</td>
                    <td>{{ $result->score }}</td>
                    <td>{{ $result->grade }}</td>
                    <td>{{ $result->grade_point }}</td>
                </tr>
            @endforeach
        </table>

        <h2 class="text-xl font-semibold">GPA: {{ $gpa }}</h2>

        <form method="GET" action="/students/{{ $student->id }}/gpa" class="mb-4">
            <label>Semester:</label>
            <select name="semester" onchange="this.form.submit()" class="border p-2">
                <option value="">All</option>
                <option value="First" @if($semester=='First') selected @endif>First</option>
                <option value="Second" @if($semester=='Second') selected @endif>Second</option>
            </select>
        </form>


        <h2 class="text-xl font-semibold mt-4">
            @if($semester) Semester: {{ $semester }} @else All Semesters @endif
        </h2>

        <table class="border w-full mb-4">
            <tr class="border">
                <th>Course</th>
                <th>Code</th>
                <th>Unit</th>
                <th>Score</th>
                <th>Grade</th>
                <th>Grade Point</th>
            </tr>

            @foreach ($results as $result)
                <tr class="border">
                    <td>{{ $result->course->name }}</td>
                    <td>{{ $result->course->code }}</td>
                    <td>{{ $result->course->unit }}</td>
                    <td>{{ $result->score }}</td>
                    <td>{{ $result->grade }}</td>
                    <td>{{ $result->grade_point }}</td>
                </tr>
            @endforeach
        </table>

        <h2 class="text-xl font-bold">GPA: {{ $gpa }}</h2>

        <a href="/students/{{ $student->id }}/transcript/pdf"
           class="bg-green-600 text-white px-4 py-2 rounded">
            Download PDF
        </a>



        <a href="/students" class="bg-blue-600 text-white px-4 py-2 mt-4 inline-block">Back to Students</a>
    </div>
</x-app-layout>
