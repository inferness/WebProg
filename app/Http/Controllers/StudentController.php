<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\StudentDetail;
use Illuminate\SUpport\Facades\Schema;

class StudentController extends Controller
{
    public function getAll(){
        $students = student::all();
        $tableColumns = Schema::getColumnListing('student');
        return view('student', compact('students', 'tableColumns'));
    }

    public function getStudentDetail(){
        $students = Student::with('studentDetail')->get();

        return view('studentDetail', ['students'=>$students]);
    }

    public function localization(){
        app()->setLocale('en');
        return view('login');
    }

    public function collection(){
        $students = collect([
            ['name'=>'Axel', 'score'=>'90', 'hobby'=>'game'],
            ['name'=>'Bob', 'score'=>'91', 'hobby'=>'badminton'],
            ['name'=>'Tom', 'score'=>'92', 'hobby'=>'reading'],
            ['name'=>'Sam', 'score'=>'93', 'hobby'=>'movie'],
        ]);

        $collection = new \Illuminate\Support\Collection($students);

        $average = $students->pluck('score')->avg();
        $min = $students->pluck('score')->min();
        $max = $students->pluck('score')->max();

        return view('collection', compact('students', 'average', 'min', 'max'));
    }
}
