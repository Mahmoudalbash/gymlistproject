<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/exercises', [ExerciseController::class, 'index'])->name('exercises.index');

Route::get('/exercises/create', [ExerciseController::class,'create'])->name('exercises.create');
Route::get('/exercises/{exercise}', [ExerciseController::class, 'show'])->name('exercises.show');

Route::post('/exercises', [ExerciseController::class, 'store'])->name('exercises.store');



route::get('/exercises/{exercise}/edit', [ExerciseController::class, 'edit'])->name('exercises.edit');
route::put('/exercises/{exercise}', [ExerciseController::class, 'update'])->name('exercises.update');


Route::delete('/exercises/{exercise}', [ExerciseController::class, 'destroy'])->name('exercises.destroy');
