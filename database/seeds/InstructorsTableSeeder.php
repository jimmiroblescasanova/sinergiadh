<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('instructors')->insert([
            'nombre' => 'Noemí Vega',
            'descripcion' => 'Apasionada del Desarrollo Humano, Abogada de profesión y especialista en Siniestros automovilísticos. Fundadora del Grupo NVC Asesores.
-	Certificada como Instructora para la Impartición de Cursos de formación de Capital Humano (EC0217)
-	Certificada como Diseñadora de Cursos de formación de Capital Humano (EC0301)
-	Certificada para la ejecución de Sesiones de Coaching (EC0204)
-	Certificada como Evaluadora de los Estándares de Competencia (EC0076)
-	Conferencista de diversos Congresos sobre seguros en temas de prevención y atención de Siniestros autos.
-	Capacitadora externa certificada por la Secretaría del Trabajo y Previsión Social',
            'img' => 'noemi_vega.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('instructors')->insert([
            'nombre' => 'Miguel Matienzo',
            'descripcion' => 'Apasionado de los medios digitales, Coach de transformación y experto en Manejo de equipos de trabajo y liderazgo.
-	Certificado como Instructor para la Impartición de Cursos de formación de Capital Humano (EC0217)
-	Certificado como Diseñador de Cursos de formación de Capital Humano (EC0301)
-	Coach de Transformación Certificado por Human Coaching Community.
-	 Coach Ontológico acreditado por la Academia de Coaching Powerlife Coaching & Training.
-	Capacitador externo Certificado por la Secretaría de Trabajo y Previsión Social.',
            'cita' => 'El mundo requiere de locos comprometidos con la evolución Humana que estén dispuestos a dejar un legado de paz y diversión en acciones, no en bonitas ideas',
            'img' => 'miguel_matienzo.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
