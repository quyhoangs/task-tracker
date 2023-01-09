<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ProjectsController laravel 8

// group middleware auth
Route::group(['middleware'=>'auth'],function () {
    Route::get('/projects', [ProjectsController::class,'index']);
    Route::get('/projects/create', [ProjectsController::class,'create']);
    Route::get('/projects/{project}', [ProjectsController::class,'show']);
    Route::post('/projects', [ProjectsController::class,'store']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
