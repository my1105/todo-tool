<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello  world';
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/tasks', [TasksController::class,'index'])->name('tasks.index');
Route::get('/tasks/create', [TasksController::class,'create'])->name('tasks.create');
Route::post('/tasks/create', [TasksController::class,'store'])->name('tasks.store');
Route::get('/tasks/{id}/edit', [TasksController::class,'edit'])->name('tasks.edit');
Route::post('/tasks/{id}/edit', [TasksController::class,'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [TasksController::class,'destroy'])->name('tasks.destroy');
