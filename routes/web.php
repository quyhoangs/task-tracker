<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ProjectsController laravel 8
Route::post('/projects', [ProjectsController::class,'store']);
Route::get('/projects', [ProjectsController::class,'index']);
