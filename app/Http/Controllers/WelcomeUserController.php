<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nickname = null)
    {
        $name = ucfirst($name);
        if ($nickname) {
            return  "Mi nombre es {$name} y mi apodo es {$nickname}";
        } else {
            return "Mi nombre es {$name}";
        }
    }
}
