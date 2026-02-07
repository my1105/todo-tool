<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello  world';
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/tasks/create', function () {
    return view('tasks.create');
});
