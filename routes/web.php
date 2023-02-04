<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectTaskController;
use Illuminate\Support\Facades\Route;

Route::controller(RegisterController::class)->group(function () {
    Route::prefix('register')->group(function() {
        Route::get('/','create')->name('register');
        Route::post('/','store');
        Route::get('/verify-account/{token}', 'verifyAccount')->name('verify');
    });
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login','index')->name('login');
    Route::post('/login','postLogin');
    Route::get('/logout','logout');
});

Route::controller(ForgotPasswordController::class)->middleware(['is_verify_email'])->group(function () {
    Route::get('/forget-password','showForgetPasswordForm');
    Route::post('/forget-password','submitForgetPasswordForm')->middleware('throttle:3,1');
    Route::get('/reset-password/{token}','showResetPasswordForm')->name('reset-password')->middleware('throttle:3,1');
    Route::post('/reset-password','submitResetPasswordForm')->name('reset-password-post');
});

Route::controller(ProjectsController::class)->middleware(['auth','is_verify_email'])->group(function () {
    Route::prefix('projects')->group(function() {
        Route::get('/create','create');
        Route::get('/{project}','show');
        Route::get('/','index');
        Route::post('/','store');
    });
});

Route::controller(ProjectTaskController::class)->middleware(['auth','is_verify_email'])->group(function () {
    Route::prefix('projects')->group(function() {
        Route::post('/{project}/tasks','store');
    });
});
