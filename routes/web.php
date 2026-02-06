<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TranscriptController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/students', [StudentController::class, 'index'])
    #Route::resource('students', StudentController::class);
    #Route::resource('courses', CourseController::class);
    #Route::resource('results', ResultController::class);
        ->middleware('auth');

    Route::get('/students/create', [StudentController::class, 'create'])
        ->middleware('auth');

    Route::post('/students', [StudentController::class, 'store'])
        ->middleware('auth');

    // Edit student form
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])
        ->middleware('auth');

// Update student
    Route::put('/students/{student}', [StudentController::class, 'update'])
        ->middleware('auth');

// Delete student
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])
        ->middleware('auth');


    Route::get('/students/{student}/gpa', [StudentController::class, 'gpa'])
        ->middleware('auth');

    Route::get('/students/{student}/transcript/pdf', [TranscriptController::class, 'download'])
        ->middleware('auth');

});


    Route::get('/courses', [CourseController::class, 'index'])->middleware('auth');
    Route::get('/courses/create', [CourseController::class, 'create'])->middleware('auth');
    Route::post('/courses', [CourseController::class, 'store'])->middleware('auth');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->middleware('auth');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->middleware('auth');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->middleware('auth');



    Route::get('/results', [ResultController::class, 'index'])->middleware('auth');
    Route::get('/results/create', [ResultController::class, 'create'])->middleware('auth');
    Route::post('/results', [ResultController::class, 'store'])->middleware('auth');

    Route::get('/students/{student}/gpa', [StudentController::class, 'gpa'])->middleware('auth');

    Route::get('/students/{student}/transcript/pdf',
        [TranscriptController::class, 'download']
    )->middleware('auth');

    Route::get('/students/{student}/gpa', [StudentController::class, 'gpa'])
        ->middleware('auth');












    require __DIR__ . '/auth.php';
