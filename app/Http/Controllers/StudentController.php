<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\StudentDetail;
use Illuminate\SUpport\Facades\Schema;
use App\Models\formModel;

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

    public function processForm(Request $request){
        // Validation rules
        $rules = [
            'nim' => 'required|unique:form,nim',
            'name' => 'required|string',
            'email' => 'required|email',
        ];

        // Custom error messages
        $messages = [
            'nim.required' => 'NIM is required',
            'nim.unique' => 'NIM must be unique',
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
        ];

        // Validate the form data
        $validator = $request->validate($rules, $messages);

        // Create a new instance of the FormModel
        $formEntry = new FormModel;

        // Set the model properties with the form data
        $formEntry->nim = $request->input('nim');
        $formEntry->name = $request->input('name');
        $formEntry->email = $request->input('email');

        // Save the model to the database
        $formEntry->save();

        // Redirect with success message
        return redirect('/')->with('success', 'Form submitted successfully');
    }
}
