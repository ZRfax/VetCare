<?php

namespace Database\Seeders;

use App\Models\Recomendacion;
use Illuminate\Database\Seeder;

class RecomendacionSeeder extends Seeder
{
    public function run(): void
    {
        $recomendaciones = [
            [
                'titulo'    => 'Cuidados Básicos para tu Mascota',
                'categoria' => 'Salud',
                'imagen'    => 'recomendacion1.jpg',
                'slug'      => 'cuidados-basicos-mascota',
                'autor'     => 'Dr. Carlos Mendoza',
                'resumen'   => 'Aprende los cuidados esenciales que debes mantener para garantizar la higiene, el ejercicio y la atención diaria de tu mascota.',
                'contenido' => '<h2>Cuidados Básicos para tu Mascota</h2>
<p>Tener una mascota es una de las experiencias más gratificantes que puede vivir una persona, pero también conlleva una gran responsabilidad. Proporcionar los cuidados básicos adecuados asegura que tu compañero peludo disfrute de una vida larga, saludable y feliz.</p>

<h3>Alimentación y Nutrición</h3>
<p>La base de la salud de tu mascota radica en una dieta equilibrada y adaptada a su especie, raza, edad y condición física. Ofrece alimentos de calidad, ricos en proteínas y nutrientes esenciales. Evita los alimentos procesados con alto contenido en azúcares o grasas trans. Consulta siempre con tu veterinario antes de hacer cambios significativos en la dieta de tu mascota.</p>

<h3>Higiene y Aseo</h3>
<p>El aseo regular es fundamental para prevenir enfermedades de la piel y mantener a tu mascota cómoda. Cepilla el pelaje de tu perro o gato al menos dos veces por semana para evitar enredos y reducir la cantidad de pelo que queda en el hogar. El baño periódico con productos específicos para mascotas ayuda a mantener la piel limpia y libre de parásitos externos.</p>

<h3>Ejercicio y Estimulación Mental</h3>
<p>El ejercicio regular es crucial para mantener un peso saludable y prevenir problemas de comportamiento. Los perros necesitan paseos diarios, mientras que los gatos se benefician de juegos interactivos con juguetes. La estimulación mental mediante juguetes de enriquecimiento y desafíos cognitivos mantiene a tu mascota activa, curiosa y psicológicamente equilibrada.</p>

<h3>Visitas Veterinarias Preventivas</h3>
<p>Las revisiones periódicas con el veterinario permiten detectar problemas de salud antes de que se agraven. Se recomienda al menos una visita anual para mascotas adultas y revisiones más frecuentes para cachorros y animales mayores. No esperes a que aparezcan síntomas evidentes: la medicina preventiva es siempre la mejor estrategia para garantizar una larga vida a tu compañero.</p>',
            ],
            [
                'titulo'    => 'Calendario de Vacunación para Perros',
                'categoria' => 'Salud',
                'imagen'    => 'recomendacion2.jpg',
                'slug'      => 'calendario-vacunacion-perros',
                'autor'     => 'Dra. Ana García',
                'resumen'   => 'Guía completa sobre el esquema de vacunación recomendado para perros desde cachorros hasta adultos mayores.',
                'contenido' => '<h2>Calendario de Vacunación para Perros</h2>
<p>La vacunación es una de las herramientas más eficaces para proteger a tu perro de enfermedades infecciosas potencialmente mortales. Un calendario de vacunación correcto asegura que tu mascota esté protegida durante todas las etapas de su vida.</p>

<h3>Vacunas para Cachorros (6 a 16 semanas)</h3>
<p>Los cachorros reciben anticuerpos de su madre a través de la leche materna, pero estos desaparecen gradualmente. Por eso, es fundamental iniciar el esquema de vacunación entre las 6 y 8 semanas de vida. Las vacunas esenciales incluyen la combinación DHPP (Distemper, Hepatitis, Parvovirus y Parainfluenza), que se aplica en serie cada 3 a 4 semanas hasta las 16 semanas de edad.</p>

<h3>Vacuna Antirrábica</h3>
<p>La vacuna contra la rabia es obligatoria en la mayoría de los países y debe aplicarse a partir de las 12 semanas de edad. Esta vacuna protege no solo a tu mascota, sino también a las personas que conviven con ella, ya que la rabia es una enfermedad zoonótica transmisible al ser humano.</p>

<h3>Vacunas de Refuerzo en Adultos</h3>
<p>Una vez completado el esquema inicial, los perros adultos requieren refuerzos anuales o trianuales según el tipo de vacuna. La vacuna DHPP tiene versiones que duran hasta 3 años, mientras que la antirrábica generalmente se repone cada año. Consulta a tu veterinario para establecer el calendario más adecuado para tu perro según su edad, estilo de vida y riesgo de exposición.</p>

<h3>Vacunas Opcionales</h3>
<p>Dependiendo del estilo de vida de tu perro, existen vacunas adicionales recomendadas, como la de Leptospirosis, Bordetella (tos de las perreras) y Lyme. Estas se indican especialmente en perros que frecuentan parques, conviven con otros animales o viven en zonas rurales. Habla con tu veterinario para evaluar si estas vacunas son necesarias para tu mascota.</p>',
            ],
            [
                'titulo'    => 'Nutrición Adecuada para Gatos',
                'categoria' => 'Nutrición',
                'imagen'    => 'recomendacion3.jpg',
                'slug'      => 'nutricion-adecuada-gatos',
                'autor'     => 'Dra. María Torres',
                'resumen'   => 'Descubre la dieta ideal para tu gato: las mejores fuentes alimenticias y cómo implementar una dieta balanceada y saludable.',
                'contenido' => '<h2>Nutrición Adecuada para Gatos</h2>
<p>Los gatos son carnívoros estrictos, lo que significa que su cuerpo está diseñado para obtener los nutrientes esenciales de fuentes animales. Una alimentación inadecuada puede derivar en problemas graves de salud como obesidad, diabetes, enfermedad renal y problemas urinarios.</p>

<h3>Proteínas de Alta Calidad</h3>
<p>Las proteínas son el pilar fundamental de la dieta felina. El pollo, el pavo, el pescado y la carne de res son excelentes fuentes de aminoácidos esenciales como la taurina, que los gatos no pueden sintetizar por sí solos. La deficiencia de taurina puede causar enfermedades cardíacas y problemas de visión. Asegúrate de que el alimento que elijas para tu gato liste proteínas animales como primer ingrediente.</p>

<h3>Hidratación y Agua</h3>
<p>Los gatos tienen una tendencia natural a consumir poca agua, herencia de sus ancestros del desierto. Esta característica los hace propensos a problemas renales y urinarios. Para compensar, se recomienda ofrecer alimento húmedo (latas o sachets) al menos una vez al día, ya que su contenido de humedad es del 70-80%. Además, coloca varias fuentes de agua fresca en distintos puntos del hogar o considera una fuente de agua circulante, que suele atraer más a los gatos.</p>

<h3>Evitar Ingredientes Dañinos</h3>
<p>Ciertos alimentos son tóxicos para los gatos y nunca deben ofrecérseles: cebolla, ajo, uvas, pasas, chocolate, cafeína, xilitol y alcohol. Los lácteos, aunque no son tóxicos, pueden causar problemas digestivos en gatos adultos que son intolerantes a la lactosa. Consulta siempre con tu veterinario antes de introducir nuevos alimentos en la dieta de tu gato.</p>

<h3>Porciones y Frecuencia</h3>
<p>El sobrepeso es uno de los problemas de salud más comunes en gatos domésticos. Controla las porciones según el peso ideal de tu mascota y las indicaciones del fabricante del alimento. Dividir la ración diaria en 2 o 3 comidas pequeñas ayuda a mantener el metabolismo activo y previene la obesidad. En gatos con tendencia a engordar, los alimentos de control de peso bajos en carbohidratos son una excelente opción.</p>',
            ],
            [
                'titulo'    => 'Prevención de Enfermedades Comunes',
                'categoria' => 'Salud',
                'imagen'    => 'recomendacion4.jpg',
                'slug'      => 'prevencion-enfermedades-comunes',
                'autor'     => 'Dr. Luis Ramírez',
                'resumen'   => 'Conoce las enfermedades más frecuentes en mascotas y cómo prevenirlas con chequeos periódicos y vacunación.',
                'contenido' => '<h2>Prevención de Enfermedades Comunes en Mascotas</h2>
<p>La prevención es siempre más efectiva y económica que el tratamiento. Conocer las enfermedades más frecuentes que afectan a las mascotas y tomar medidas preventivas oportunas puede marcar la diferencia entre una vida larga y saludable o problemas de salud crónicos.</p>

<h3>Parásitos Externos e Internos</h3>
<p>Las pulgas, garrapatas y ácaros son parásitos externos que pueden causar desde irritación en la piel hasta transmitir enfermedades graves como la ehrlichiosis o la babesiosis. El uso regular de antiparasitarios externos (pipetas, collares o sprays) es esencial para mantenerlos a raya. Los parásitos internos, como los gusanos intestinales, también son muy comunes. La desparasitación interna cada 3 a 6 meses es recomendable para la mayoría de las mascotas.</p>

<h3>Enfermedades Infecciosas</h3>
<p>El parvovirus, el moquillo canino, la leucemia felina y la rinotraqueítis son solo algunas de las enfermedades infecciosas para las que existen vacunas eficaces. Mantener el calendario de vacunación al día es la medida preventiva más importante que puedes tomar. Evita que tu mascota tenga contacto con animales desconocidos o de salud incierta hasta estar completamente vacunada.</p>

<h3>Salud Dental</h3>
<p>Las enfermedades periodontales afectan a más del 80% de los perros y gatos mayores de 3 años. La acumulación de sarro genera infecciones que pueden extenderse al corazón, los riñones y el hígado. Cepillar los dientes de tu mascota regularmente con pasta dental veterinaria y ofrecer snacks dentales ayuda a prevenir este problema. Las limpiezas dentales profesionales anuales son muy recomendables.</p>

<h3>Chequeos Preventivos</h3>
<p>Las visitas veterinarias regulares permiten detectar enfermedades en estadios tempranos, cuando el tratamiento es más efectivo y menos costoso. Un análisis de sangre anual, la revisión de los órganos internos mediante ecografía y el control del peso y la condición corporal son herramientas esenciales para la medicina preventiva. No esperes a que tu mascota muestre síntomas evidentes: muchas enfermedades se desarrollan silenciosamente durante meses.</p>',
            ],
            [
                'titulo'    => 'Signos de Emergencia en Mascotas',
                'categoria' => 'Emergencias',
                'imagen'    => 'recomendacion5.jpg',
                'slug'      => 'signos-emergencia-mascotas',
                'autor'     => 'Dr. Luis Ramírez',
                'resumen'   => 'Identifica los síntomas que requieren atención veterinaria inmediata y cómo actuar ante situaciones de emergencia.',
                'contenido' => '<h2>Signos de Emergencia en Mascotas</h2>
<p>Reconocer los signos de alerta en tu mascota puede salvarle la vida. Ante cualquier síntoma de emergencia, lo más importante es mantener la calma y acudir de inmediato a la clínica veterinaria más cercana o llamar a la línea de urgencias.</p>

<h3>Signos de Emergencia Inmediata</h3>
<p>Existen situaciones que requieren atención veterinaria urgente sin dilación: dificultad para respirar o jadeo excesivo, pérdida del conocimiento o convulsiones, sangrado abundante que no cesa, abdomen visiblemente hinchado y doloroso, incapacidad de orinar o defecar, fracturas visibles o imposibilidad de apoyar una extremidad, y pérdida brusca de la visión. Ante cualquiera de estos signos, no esperes: acude de inmediato a urgencias veterinarias.</p>

<h3>Signos que Requieren Atención en el Día</h3>
<p>Otros síntomas, aunque no son una emergencia inmediata, deben ser evaluados por un veterinario en el transcurso del día: vómitos repetidos o diarrea con sangre, fiebre alta (más de 39.5°C en perros y gatos), letargo extremo o desorientación, pérdida repentina del apetito que se prolonga más de 24 horas, y tos persistente o estornudos frecuentes con secreción nasal.</p>

<h3>Cómo Actuar en una Emergencia</h3>
<p>Si tu mascota sufre un accidente o presenta un síntoma de emergencia, sigue estos pasos: mantén la calma para no transmitir estrés al animal, minimiza sus movimientos para evitar agravar posibles lesiones, cúbrelo con una manta si tiene hipotermia, llama a la clínica veterinaria mientras te desplazas para avisar de tu llegada y transporta al animal con cuidado, evitando que se lastime más en el trayecto.</p>

<h3>Kit de Primeros Auxilios para Mascotas</h3>
<p>Tener un kit básico de primeros auxilios en casa te permite actuar con rapidez en situaciones de emergencia. Incluye: vendas y gasas estériles, solución salina para lavar heridas, termómetro rectal, guantes desechables, suero oral para hidratación, y el número de teléfono de tu clínica veterinaria y de urgencias. Recuerda que los primeros auxilios son solo una medida temporal hasta llegar a la clínica.</p>',
            ],
            [
                'titulo'    => 'Beneficios de la Alimentación Natural',
                'categoria' => 'Nutrición',
                'imagen'    => 'recomendacion6.png',
                'slug'      => 'beneficios-alimentacion-natural',
                'autor'     => 'Dra. Ana García',
                'resumen'   => 'Todo sobre la dieta natural para tu mascota: beneficios, cómo implementarla correctamente y qué alimentos evitar.',
                'contenido' => '<h2>Beneficios de la Alimentación Natural para Mascotas</h2>
<p>Cada vez más propietarios de mascotas se interesan por ofrecer a sus animales una dieta basada en alimentos naturales, sin conservantes artificiales ni ingredientes procesados. Cuando está bien planificada, la alimentación natural puede aportar numerosos beneficios para la salud de tu mascota.</p>

<h3>Mejora de la Digestión y la Salud Intestinal</h3>
<p>Los alimentos naturales, al no contener aditivos químicos ni ingredientes de baja calidad, son más fáciles de digerir para la mayoría de las mascotas. Una dieta natural rica en proteínas de alta calidad y fibra adecuada favorece un tránsito intestinal saludable, reduce los gases, las heces malolientes y la inflamación intestinal. Muchas mascotas con alergias o intolerancias alimentarias mejoran notablemente al cambiar a una dieta natural con proteínas únicas.</p>

<h3>Pelaje y Piel más Saludables</h3>
<p>Los ácidos grasos omega-3 y omega-6 presentes en alimentos como el salmón, el atún y las sardinas son esenciales para mantener un pelaje brillante y una piel hidratada. Una dieta natural bien formulada aporta estos nutrientes en su forma más biodisponible, lo que se traduce en una reducción de la descamación, el picor y las irritaciones cutáneas.</p>

<h3>Consideraciones Importantes</h3>
<p>La alimentación natural no es sinónimo de dar restos de comida humana a tu mascota. Requiere una planificación cuidadosa para asegurar que la dieta esté completa y equilibrada en todos los nutrientes esenciales. Es fundamental consultar con un veterinario especializado en nutrición antes de implementar cualquier cambio dietético significativo. Una dieta natural mal formulada puede generar deficiencias nutricionales graves con consecuencias serias para la salud de tu mascota.</p>

<h3>La Transición a una Dieta Natural</h3>
<p>Si decides incorporar alimentos naturales en la dieta de tu mascota, hazlo de manera gradual. Empieza mezclando pequeñas cantidades de alimento natural con la dieta habitual e incrementa la proporción progresivamente a lo largo de 2 a 3 semanas. Esto permite que el sistema digestivo de tu mascota se adapte sin problemas. Monitorea el peso, la energía y las deposiciones durante la transición y ajusta las cantidades según sea necesario.</p>',
            ],
        ];

        foreach ($recomendaciones as $recomendacion) {
            Recomendacion::create($recomendacion);
        }
    }
}
