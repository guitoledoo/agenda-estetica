<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Aqui, estamos passando o usuário logado como uma propriedade para o Vue
        return Inertia::render('Home', [
            'user' => Auth::user(),
        ]);
    }
}
