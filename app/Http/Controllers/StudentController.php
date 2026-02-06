<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'matric_no' => 'required|unique:students',
            'department' => 'required',
            'level' => 'required',
        ]);

        Student::create($request->all());

        return redirect('/students')->with('success', 'Student added successfully');
    }

    // Show edit form
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

// Update student in DB
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'matric_no' => 'required|unique:students,matric_no,' . $student->id,
            'department' => 'required',
            'level' => 'required',
        ]);

        $student->update($request->all());

        return redirect('/students')->with('success', 'Student updated successfully');
    }

// Delete student
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/students')->with('success', 'Student deleted successfully');
    }

    public function gpa(Student $student)
    {
        $gpa = $student->calculateGPA();
        $results = $student->results()->with('course')->get();

        // Example: current semester or latest semester from results
        $semester = $results->pluck('semester')->unique()->first() ?? 'N/A';

        return view('students.gpa', compact('student', 'results', 'gpa', 'semester'));
    }




}
