<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ProjectsController laravel 8
Route::get('/projects/{project}', [ProjectsController::class,'show']);
Route::get('/projects', [ProjectsController::class,'index']);
Route::post('/projects', [ProjectsController::class,'store'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
