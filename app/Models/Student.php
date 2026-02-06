<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   # use HasFactory;
    protected $fillable = [
        'name',
        'matric_no',
        'department',
        'level',
    ];

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function calculateGPA($semester = null)
    {
        $results = $this->results()->with('course');

        if ($semester) {
            $results = $results->get()->filter(function ($result) use ($semester) {
                return $result->course->semester === $semester;
            });
        } else {
            $results = $results->get();
        }

        $totalUnits = 0;
        $totalPoints = 0;

        foreach ($results as $result) {
            $unit = $result->course->unit;
            $gp = $result->grade_point;

            $totalUnits += $unit;
            $totalPoints += $gp * $unit;
        }

        return $totalUnits > 0 ? round($totalPoints / $totalUnits, 2) : 0.0;
    }


}


