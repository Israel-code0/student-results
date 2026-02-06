<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Result;

class DashboardController extends Controller
{
    public function index()
    {
        $studentsCount = Student::count();
        $coursesCount = Course::count();
        $resultsCount = Result::count();

        // Average GPA
        $students = Student::all();
        $totalGpa = 0;
        $count = 0;

        foreach ($students as $student) {
            $gpa = $student->calculateGPA();
            if ($gpa > 0) {
                $totalGpa += $gpa;
                $count++;
            }
        }

        $averageGpa = $count > 0 ? round($totalGpa / $count, 2) : 0;

        return view('dashboard', compact(
            'studentsCount',
            'coursesCount',
            'resultsCount',
            'averageGpa'
        ));
    }
}
