<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'impersonate'])->group(function () {
    Route::get('/home', 'Homeontroller@index')->name('home')->middleware('password.confirm');

    Route::get('impersonate', 'ImpersonateController@index')->name('impersonate.index');
    Route::get('/users/{id}/impersonate', 'ImpersonateController@impersonate')->name('impersonate.impersonate');
    Route::get('/users/stop', 'ImpersonateController@stopImpersonating')->name('impersonate.stop');

    Route::resource('profile', 'ProfileController')->only(['index', 'store']);

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
    });
});
