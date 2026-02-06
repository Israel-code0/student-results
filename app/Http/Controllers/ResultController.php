<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;


class ResultController extends Controller
{
    // List all results
    public function index()
    {
        $results = Result::with('student', 'course')->get();
        return view('results.index', compact('results'));
    }

    // Show form to add result
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('results.create', compact('students', 'courses'));
    }

    // Store result
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'score' => 'required|integer|min:0|max:100',
        ]);

        $score = $request->score;
        // Determine grade & grade point
        if ($score >= 70) { $grade = 'A'; $gp = 5.0; }
        elseif ($score >= 60) { $grade = 'B'; $gp = 4.0; }
        elseif ($score >= 50) { $grade = 'C'; $gp = 3.0; }
        elseif ($score >= 45) { $grade = 'D'; $gp = 2.0; }
        elseif ($score >= 40) { $grade = 'E'; $gp = 1.0; }
        else { $grade = 'F'; $gp = 0.0; }

        Result::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'score' => $score,
            'grade' => $grade,
            'grade_point' => $gp,
        ]);

        return redirect('/results')->with('success', 'Result added successfully');
    }
}
