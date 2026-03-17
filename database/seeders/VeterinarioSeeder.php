<?php

namespace Database\Seeders;

use App\Models\Veterinario;
use Illuminate\Database\Seeder;

class VeterinarioSeeder extends Seeder
{
    public function run(): void
    {
        $veterinarios = [
            [
                'nombre'       => 'Dr. Carlos Mendoza',
                'especialidad' => 'Medicina Interna',
                'descripcion'  => 'Con más de 10 años de experiencia en medicina interna y diagnóstico avanzado, el Dr. Mendoza es un referente en el tratamiento de enfermedades crónicas y complejas en mascotas.',
                'foto'         => 'Ricardo.jpg',
                'activo'       => true,
            ],
            [
                'nombre'       => 'Dra. Ana García',
                'especialidad' => 'Medicina Interna',
                'descripcion'  => 'Especialista en medicina preventiva y bienestar animal, la Dra. García se destaca por su trato empático con los pacientes y su enfoque en la detección temprana de enfermedades.',
                'foto'         => 'Monica.jpg',
                'activo'       => true,
            ],
            [
                'nombre'       => 'Dr. Luis Ramírez',
                'especialidad' => 'Urgencias y Cirugía',
                'descripcion'  => 'Experto en cirugías de emergencia y traumatología animal, el Dr. Ramírez lidera el equipo de urgencias con disponibilidad 24/7 para atender cualquier situación crítica.',
                'foto'         => 'Ryan.jpg',
                'activo'       => true,
            ],
            [
                'nombre'       => 'Dra. María Torres',
                'especialidad' => 'Dermatología',
                'descripcion'  => 'Especialista en enfermedades de la piel y alergias en mascotas, la Dra. Torres ofrece tratamientos personalizados para mejorar la calidad de vida de los animales con problemas dermatológicos.',
                'foto'         => 'Karla.jpg',
                'activo'       => true,
            ],
        ];

        foreach ($veterinarios as $veterinario) {
            Veterinario::create($veterinario);
        }
    }
}
