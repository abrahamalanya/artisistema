<?php

Route::get('/', function () {
    return 'Bienvenido';
});

Route::get('/admin/home', function () {
    return 'INICIO en el lado del administrador.';
});

Route::get('/admin/user/new', function () {
    return "Nuevo usuario";
});

Route::get('/admin/user/{id}', function ($id) {
    return "Detalle del usuario: {$id}";
});

Route::get('/admin/{name}/{nickname?}', function ($name, $nickname = null) {
    $name = ucfirst($name);
    if ($nickname) {
        return  "Mi nombre es {$name} y mi apodo es {$nickname}";
    } else {
        return "Mi nombre es {$name}";
    }
});