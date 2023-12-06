<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class, 'getAll']);

Route::get('/studentDetail', [StudentController::class, 'getStudentDetail']);

Route::get('/form', function(){
    return view('form');
});

Route::post('/formProcess',[StudentController::class, 'processForm']);
