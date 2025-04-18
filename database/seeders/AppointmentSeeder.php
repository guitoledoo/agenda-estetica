<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role', 'user')->get();
        $services = Service::all();

        foreach (range(1, 5) as $i) {
            Appointment::create([
                'user_id' => $users->random()->id,
                'service_id' => $services->random()->id,
                'date' => carbon::now()->addDays(rand(1, 10))->format('Y-m-d'),
                'time' => Carbon::createFromTime(rand(8, 17), 0)->format('H:i:s'),
                'status' => 'pendente',
            ]);
        }
    }
}
