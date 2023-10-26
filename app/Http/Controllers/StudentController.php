<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\SUpport\Facades\Schema;

class StudentController extends Controller
{
    public function get(){
        $students = student::all();
        $tableColumns = Schema::getColumnListing('student');
        return view('student', compact('students', 'tableColumns'));
    }
}
