<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Controllers\AuthController;
use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
