<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: DejaVu Sans; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px; }
        th { background: #eee; }
    </style>
</head>
<body>

<h2>Student Transcript</h2>

<p>
    <strong>Name:</strong> {{ $student->name }} <br>
    <strong>Matric No:</strong> {{ $student->matric_no }}
</p>

<table>
    <tr>
        <th>Course</th>
        <th>Code</th>
        <th>Unit</th>
        <th>Score</th>
        <th>Grade</th>
        <th>GP</th>
    </tr>

    @foreach($results as $result)
        <tr>
            <td>{{ $result->course->name }}</td>
            <td>{{ $result->course->code }}</td>
            <td>{{ $result->course->unit }}</td>
            <td>{{ $result->score }}</td>
            <td>{{ $result->grade }}</td>
            <td>{{ $result->grade_point }}</td>
        </tr>
    @endforeach
</table>

<h3>GPA: {{ $gpa }}</h3>

</body>
</html>
