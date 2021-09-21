<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeAdminController extends Controller
{
    public function __invoke()
    {
        return "INICIO en el lado del administrador.";
    }
}
