<?php

use App\Http\Controllers\Api\v1\Auth\LoginController;
use App\Http\Controllers\Api\v1\Auth\LogoutController;

Route::namespace('Api\v1')->group(function () {
    Route::post('auth/login', [LoginController::class, 'login']);
    Route::post('auth/logout', [LogoutController::class]);

    # Protected Route
    Route::middleware('auth:api')->group(function () {
        Route::get('auth/user', function () {
            return response()->json(request()->user());
        });
    });
});
