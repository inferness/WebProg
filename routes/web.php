<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SessionController;

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

Route::get('/login', [StudentController::class, 'localization']);

Route::get('/collection', [StudentController::class, 'collection']);

Route::get('/home', [SessionController::class, 'home']);
Route::get('/create', [SessionController::class, 'create']);
Route::get('/access', [SessionController::class, 'access']);
Route::get('/delete', [SessionController::class, 'delete']);
Route::get('/flash', [SessionController::class, 'flash']);