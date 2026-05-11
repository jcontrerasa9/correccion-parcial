<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', [CourseController::class, 'index'])->name('courses.index');
Route::get('/cursos/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::post('/cursos', [CourseController::class, 'store'])->name('courses.store');
Route::get('/cursos/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/cursos/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/cursos/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');