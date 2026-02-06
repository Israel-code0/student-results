<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;

class TranscriptController extends Controller
{
    public function download(Student $student)
    {
        $results = $student->results()->with('course')->get();
        $gpa = $student->calculateGPA();

        $pdf = Pdf::loadView('students.transcript-pdf', compact(
            'student', 'results', 'gpa'
        ));

        return $pdf->download($student->name . '_transcript.pdf');
    }
}
