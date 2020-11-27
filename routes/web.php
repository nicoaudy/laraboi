<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ImpersonateController;
use App\Http\Controllers\Admin\PermissionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'impersonate'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('impersonate', [ImpersonateController::class, 'index'])->name('impersonate.index');
    Route::get('/users/{id}/impersonate', [ImpersonateController::class, 'impersonate'])->name('impersonate.impersonate');
    Route::get('/users/stop', [ImpersonateController::class, 'stopImpersonating'])->name('impersonate.stop');

    Route::resource('profile', ProfileController::class)->only(['index', 'store']);

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
    });
});
