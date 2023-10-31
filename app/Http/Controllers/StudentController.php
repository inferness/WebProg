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
}
