<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index()
    {
        // Retorna a página do usuário com dados relevantes
        return Inertia::render('User/Dashboard');
    }
}

