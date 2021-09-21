<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Lista de usuarios';
        if (request()->has('empty')){
            $users = [];
        } else {
            $users = ['Jhon','Juan','Dina','Liz','Jorge'];
        }
        return view('admin/user/index', compact('users', 'title'));
    }

    public function show($id)
    {
        return view('admin/user/show', [
            'id' => $id
        ]);
    }

    public function create()
    {
        return "Nuevo usuario";
    }
}
