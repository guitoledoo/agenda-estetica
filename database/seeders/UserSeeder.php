<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Master',
            'email' => 'admin@estetica.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);


        User::create([
            'name' => 'Guilherme Cliente',
            'email' => 'guilherme@teste.com',
            'password' => Hash::make('senha123'),
            'role' => 'user',
        ]);


        User::create([
            'name' => 'Enzo Cliente',
            'email' => 'enzo@teste.com',
            'password' => Hash::make('senha123'),
            'role' => 'user',
        ]);
    }
}
