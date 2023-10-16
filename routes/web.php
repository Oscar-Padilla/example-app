<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProgramController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/token',[StudentController::class, 'token']);
Route::post('/students_store',[StudentController::class, 'store']);
Route::post('/students_show',[StudentController::class, 'show']);
Route::post('/students_destroy',[StudentController::class, 'destroy']);
Route::post('/students_edit',[StudentController::class, 'edit']);
Route::post('/students_update',[StudentController::class, 'update']);
Route::get('/students_index', [StudentController::class, 'index']);

Route::post('/programs_store',[ProgramController::class, 'store']);
Route::get('/programs_index', [ProgramController::class, 'index']);