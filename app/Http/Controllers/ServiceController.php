<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index()
    {

        $services = Service::all();

        return Inertia::render('Services',[
            'services' => $services,
        ]);
    }
}
