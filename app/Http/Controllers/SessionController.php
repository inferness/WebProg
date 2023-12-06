<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SessionController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function create(){
        
        session(['role'=>'admin', 'name'=>'axel']);

        return view('home');
    }
    public function access(){
        $role = session('role');
        $name = session('name');

        return view('access', compact('role', 'name'));
    }
    public function delete(){
        session()->forget('role');
        session()->forget('name');
        return view('home');
    }
    public function flash(){
        session()->flash('role', 'name');

        return view('home');
    }
}
