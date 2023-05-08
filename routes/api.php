<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SecretController;
use App\Http\Controllers\Api\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ProjectsController;
use App\Http\Controllers\Api\ProjectTaskController;
use App\Http\Controllers\Api\ProjectInvitationsController;
use App\Http\Controllers\Api\Member\PersonInfoController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile/person-info', [PersonInfoController::class, 'show']);
    Route::put('/profile/person-info', [PersonInfoController::class, 'updatePersonalInfo']);
});

Route::get('/secrets',[SecretController::class,'index']);

Route::controller(RegisterController::class)->group(function () {
    Route::post('/register','store')->middleware('throttle:3,60');
    Route::post('/verify-account/{token}', 'verifyAccount')->name('verify');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('/login','postLogin')->name('login');
    Route::post('/logout','logout')->middleware('auth:sanctum');
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

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
