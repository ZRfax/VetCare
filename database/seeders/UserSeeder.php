<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Administrador VetCare',
            'email'    => 'admin@vetcare.com',
            'password' => Hash::make('Admin123!'),
            'role'     => 'admin',
        ]);

        User::create([
            'name'     => 'Dr. Carlos Mendoza',
            'email'    => 'carlos@vetcare.com',
            'password' => Hash::make('Vet123!'),
            'role'     => 'veterinario',
        ]);

        User::create([
            'name'     => 'María González',
            'email'    => 'cliente@vetcare.com',
            'password' => Hash::make('Cliente123!'),
            'role'     => 'cliente',
        ]);
    }
}
