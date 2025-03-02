<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
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

Route::get('/', function () { 
    return view('welcome');
});

//Colleges Routes
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');

Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');
Route::post('/colleges', [CollegeController::class, 'createstore'])->name('colleges.createstore');

Route::get('/colleges/{id}/show', [CollegeController::class, 'show'])->name('colleges.show');

Route::get('/colleges/{id}/edit', [CollegeController::class, 'edit'])->name('colleges.edit');
Route::post('/colleges/{id}', [CollegeController::class, 'editstore'])->name('colleges.editstore');

Route::get('/colleges/{id}', [CollegeController::class, 'destroy'])->name('colleges.destroy');



Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'createstore'])->name('students.createstore');

Route::get('/students/{id}/show', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/{id}', [StudentController::class, 'editstore'])->name('students.editstore');

Route::get('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
