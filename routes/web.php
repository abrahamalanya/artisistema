<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeAdminController;
use App\Http\Controllers\WelcomeUserController;

Route::get('/', function () {
    return 'Bienvenido';
});

Route::get('/admin/home', WelcomeAdminController::class);

Route::get('/admin/users', [UserController::class, 'index']);
Route::get('/admin/user/new', [UserController::class, 'create']);
Route::get('/admin/user/{id}', [UserController::class, 'show']);

Route::get('/admin/{name}/{nickname?}', [WelcomeUserController::class, 'index']);;