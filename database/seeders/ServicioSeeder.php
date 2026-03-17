<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        $servicios = [
            [
                'nombre'      => 'Consulta General',
                'descripcion' => 'Revisión completa del estado de salud de tu mascota con diagnóstico personalizado y recomendaciones de tratamiento. Nuestros veterinarios realizan un examen físico exhaustivo para detectar cualquier problema de salud de manera temprana.',
                'imagen'      => 'consulta_general.jpg',
                'icono'       => 'icono_pulso.svg',
                'activo'      => true,
            ],
            [
                'nombre'      => 'Cirugía',
                'descripcion' => 'Procedimientos quirúrgicos realizados por un equipo especializado con los más altos estándares de seguridad y cuidado. Contamos con sala de operaciones equipada con tecnología de vanguardia para garantizar el bienestar de tu mascota.',
                'imagen'      => 'cirugia.jpeg',
                'icono'       => 'icono_documento.svg',
                'activo'      => true,
            ],
            [
                'nombre'      => 'Vacunación',
                'descripcion' => 'Programa completo de vacunación para proteger a tu mascota de enfermedades infecciosas y mantener su sistema inmune fuerte. Seguimos el esquema de vacunación recomendado por las autoridades veterinarias.',
                'imagen'      => 'vacunacion.jpg',
                'icono'       => 'icono_inyeccion.svg',
                'activo'      => true,
            ],
            [
                'nombre'      => 'Urgencias 24/7',
                'descripcion' => 'Atención veterinaria de emergencia disponible las 24 horas del día, los 7 días de la semana. Nuestro equipo de urgencias está preparado para atender cualquier situación crítica con equipos de emergencia y cuidados intensivos.',
                'imagen'      => 'urgencias.jpg',
                'icono'       => 'icono_corazon.svg',
                'activo'      => true,
            ],
            [
                'nombre'      => 'Laboratorio',
                'descripcion' => 'Análisis clínicos y diagnóstico mediante equipos de última generación para obtener resultados precisos y confiables. Realizamos análisis de sangre, orina, cultivos bacterianos y diagnóstico por imagen.',
                'imagen'      => 'laboratorio.jpg',
                'icono'       => 'icono_laboratorio.svg',
                'activo'      => true,
            ],
            [
                'nombre'      => 'Odontología',
                'descripcion' => 'Cuidado dental especializado para mantener la salud bucal de tu mascota y prevenir enfermedades periodontales. Ofrecemos limpieza dental profesional, extracciones y tratamientos especializados.',
                'imagen'      => 'odontologia.jpg',
                'icono'       => 'icono_agendar.svg',
                'activo'      => true,
            ],
        ];

        foreach ($servicios as $servicio) {
            Servicio::create($servicio);
        }
    }
}
