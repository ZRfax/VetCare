<?php

namespace Database\Seeders;

use App\Models\Testimonio;
use Illuminate\Database\Seeder;

class TestimonioSeeder extends Seeder
{
    public function run(): void
    {
        $testimonios = [
            [
                'nombre_propietario' => 'María González',
                'nombre_mascota'     => 'Max',
                'calificacion'       => 5,
                'comentario'         => 'Excelente atención para mi mascota. El Dr. Carlos fue muy profesional y cariñoso con mi perro. Los resultados fueron increíbles, totalmente recomendado.',
                'aprobado'           => true,
            ],
            [
                'nombre_propietario' => 'Roberto Martínez',
                'nombre_mascota'     => 'Whiskers',
                'calificacion'       => 5,
                'comentario'         => 'Mi gato tuvo una emergencia y el equipo de VetCare respondió de manera increíble. Los atendieron de inmediato con mucho profesionalismo. ¡Gracias!',
                'aprobado'           => true,
            ],
            [
                'nombre_propietario' => 'Ana Rodríguez',
                'nombre_mascota'     => 'Luna',
                'calificacion'       => 5,
                'comentario'         => 'La Dra. Ana García es simplemente la mejor. Mi mascota ya no tenía miedo al veterinario gracias a su trato tan amable y dedicado.',
                'aprobado'           => true,
            ],
            [
                'nombre_propietario' => 'Carlos Hernández',
                'nombre_mascota'     => 'Mis mascotas',
                'calificacion'       => 5,
                'comentario'         => 'Llevo años llevando a mis mascotas a VetCare y siempre me brindan la mejor atención. El personal es amable y las instalaciones están muy bien equipadas.',
                'aprobado'           => true,
            ],
            [
                'nombre_propietario' => 'Laura Sánchez',
                'nombre_mascota'     => 'Coco',
                'calificacion'       => 5,
                'comentario'         => 'Me quedé muy sorprendida con la calidad del servicio. La atención es muy completa y el precio es justo. Sin duda volveré con mis mascotas.',
                'aprobado'           => true,
            ],
            [
                'nombre_propietario' => 'Jorge Ramírez',
                'nombre_mascota'     => 'Nala',
                'calificacion'       => 5,
                'comentario'         => 'Los análisis de laboratorio fueron rápidos y precisos. El Dr. Luis nos explicó todo con detalle y nos dió un plan de tratamiento efectivo para nuestro gato.',
                'aprobado'           => true,
            ],
        ];

        foreach ($testimonios as $testimonio) {
            Testimonio::create($testimonio);
        }
    }
}
