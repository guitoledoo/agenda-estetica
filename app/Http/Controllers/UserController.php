<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('role:user');
    }

    public function dashboard()
    {
        return Inertia::render('User/Dashboard');
    }

}

