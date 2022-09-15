<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students');
Route::get('/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
Route::PATCH('/update/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\StudentController::class, 'delete'])->name('delete');
Route::get('/trashed_students', [App\Http\Controllers\StudentController::class, 'trashed_students'])->name('trashed_students');
Route::get('/permanent_delete/{id}', [App\Http\Controllers\StudentController::class, 'permanent_delete'])->name('permanent_delete');
Route::get('/student_store/{id}', [App\Http\Controllers\StudentController::class, 'student_store'])->name('student_store');

