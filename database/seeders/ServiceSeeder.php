<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Lavagem Simples',
            'description' => 'Lavagem externa e secagem',
            'price' => 50.00,
            'duration' => 30,
        ]);


        Service::create([
            'name' => 'Polimento Técnico',
            'description' => 'Polimento completo com proteção na pintura',
            'price' => 350.00,
            'duration' => 120,
        ]);


        Service::create([
            'name' => 'Higienização Interna',
            'description' => 'Limpeza completa do interior',
            'price' => 150.00,
            'duration' => 90,
        ]);    




    }
}
