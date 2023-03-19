<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectTaskController;
use App\Http\Controllers\ProjectInvitationsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/secrets',[SecretController::class,'index']);

Route::controller(RegisterController::class)->group(function () {
    Route::post('/register','store');
    Route::get('/verify-account/{token}', 'verifyAccount')->name('verify');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login','index')->name('login');
    Route::post('/login','postLogin');
    Route::get('/logout','logout')->middleware('auth:sanctum');
});

Route::controller(ForgotPasswordController::class)->middleware(['is_verify_email'])->group(function () {
    Route::get('/forget-password','showForgetPasswordForm');
    Route::post('/forget-password','submitForgetPasswordForm')->middleware('throttle:3,1');
    Route::get('/reset-password/{token}','showResetPasswordForm')->name('reset-password')->middleware('throttle:3,1');
    Route::post('/reset-password','submitResetPasswordForm')->name('reset-password-post');
});

Route::middleware(['is_verify_email','auth:sanctum'])->group(function () {
    // Route::resource('projects', 'ProjectsController');
    Route::prefix('projects')->group(function() {
        Route::get('/create',[ProjectsController::class, 'create']);
        Route::get('/{project}',[ProjectsController::class, 'show']);
        Route::get('/{project}/edit',[ProjectsController::class, 'edit']);
        Route::patch('/{project}',[ProjectsController::class, 'update']);
        Route::get('/',[ProjectsController::class, 'index']);
        Route::post('/',[ProjectsController::class, 'store']);
        Route::delete('/{project}',[ProjectsController::class, 'destroy']);

        Route::post('/{project}/invitations',[ProjectInvitationsController::class, 'invite']);

        Route::post('/{project}/tasks',[ProjectTaskController::class, 'store']);
        Route::patch('/{project}/tasks/{task}',[ProjectTaskController::class, 'update']);
    });
});
