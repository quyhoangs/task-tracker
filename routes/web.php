<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::controller(RegisterController::class)->group(function () {
    Route::prefix('register')->group(function() {
        Route::get('/','create')->name('register');
        Route::post('/','store');
        Route::get('/verify-account/{token}', 'verifyAccount')->name('verify');
    });
});
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::controller(ProjectsController::class)->middleware(['auth','is_verify_email'])->group(function () {
    Route::prefix('projects')->group(function() {
        Route::get('/create','create');
        Route::get('/{project}','show');
        Route::get('/','index');
        Route::post('/','store');
    });
});
