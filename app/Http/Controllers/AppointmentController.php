<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AppointmentController extends Controller
{
    public function index()
    {
        $user = Auth::user();


        if ($user->role === 'admin') {
            $appointments = Appointment::with(['user', 'service'])->get();
        } else{

            $appointments = Appointment::with(['service'])
                ->where('user_id', $user->id)
                ->get();
        }

        return Inertia::render('Appointments',[
            'appointments' => $appointments,
        ]);
    }
}
