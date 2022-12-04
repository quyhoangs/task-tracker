<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ProjectsController laravel 8

// group middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/projects/{project}', [ProjectsController::class,'show']);
    Route::get('/projects', [ProjectsController::class,'index']);
    Route::post('/projects', [ProjectsController::class,'store']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
