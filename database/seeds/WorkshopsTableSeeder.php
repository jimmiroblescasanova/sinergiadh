<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('workshops')->insert([
            'nombre' => 'Formación de Instructores',
            'dirigido_a' => 'Oficios que desempeñen transmisión de conocimientos a Capital Humano y como funciones principales sea estar frente a una audiencia: Emprendedores, Coaches, Psicólogos, Abogados, Gerentes, Recursos Humanos, Capacitadores, etc.',
            'descripcion' => 'En este taller aprenderás toda la estructura de como desempeñarte como Instructor. El como Preparar el curso o taller, conociendo los elementos que te permitan saber que estas listo para la impartición. La metodología para el desarrollo del curso taller, que te permitan asegurarte cumplir con el propósito del curso, en que momento aplicar evaluaciones y de qué tipo, para armar el expediente del participante y tener evidencia del aprendizaje del mismo. Por último, como poder realizar un cierre efectivo, verificando que el participante se va satisfecho y con un nuevo aprendizaje.
	Aprenderás técnicas para la impartición del taller, así como herramientas de Salón para poder desempeñarte de una forma óptima y funcional. Herramientas basadas en Programación Neurolingüística y técnicas de manejo de grupo, corporalidad, etc.
	También te brindaremos todas las bases para el diseño de un curso y como preparar los instrumentos de evaluación y sus momentos de aplicación.',
            'tipo' => 'formacion',
            'img' => 'formacion_de_instructores_01.jpg',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('workshops')->insert([
            'nombre' => 'Manejo Defensivo',
            'dirigido_a' => 'Capital Humano que desempeñe funciones de Conducción de vehículos.',
            'descripcion' => 'Al realizar la función de conducir un vehículo automotriz no solo es saber la operación del mismo, es conocer el contexto y contenido del reglamento de tránsito, la prevención de Siniestros. Así como conocimiento de la señalización de la vía terrestre, la responsabilidad del conductor ante la operación del vehículo. Conocimiento de características específicas para una conducción idónea bajo las normas de la Secretaría de Tránsito.',
            'tipo' => 'formacion',
            'img' => 'manejo_defensivo_01.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('workshops')->insert([
            'nombre' => 'Inteligencia Emocional para Lideres',
            'dirigido_a' => 'Capital humano que desempeñe funciones Gerenciales, Supervisión, Recursos Humanos, Directores, Encargados de Turno, Encargados de Área, Coordinadores.',
            'descripcion' => 'En este taller aprenderás de forma efectiva como comunicarte con las personas que integran un equipo de trabajo. Identificar como apoyarte de las emociones para el logro de objetivos a través del conocimiento del estilo de comportamiento de cada uno de los integrantes del equipo. Así como identificar a través de la Programación Neurolingüística la forma de recibir y transmitir la información con el propósito de lograr objetivos en conjunto. ',
            'tipo' => 'formacion',
            'img' => 'inteligencia_para_lideres_01.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('workshops')->insert([
            'nombre' => 'Herramientas de Salón (para impartir cursos y Talleres)',
            'dirigido_a' => 'Capital Humano que sus desempeños al frente a una audiencia, para la conducción de curso, seminario, conferencia, taller.',
            'descripcion' => 'A través de una metodología creada para el desempeño del Instructor sea óptimo, el participante aprenderá a usar su cuerpo de forma consciente como una herramienta. Así como Técnicas grupales y como crear contextos que puedan apoyar a transmitir el mensaje a la audiencia. Se hará consciente de que tan importante es el estar frente a una audiencia y practicará de forma vivencial las herramientas para incorporarlas para su uso inmediato.',
            'tipo' => 'formacion',
            'img' => 'herramientas_de_salon_01.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('workshops')->insert([
            'nombre' => 'Hakuna Matata (Descubrí a mi Líder)',
            'dirigido_a' => 'Adolescentes de 12 a 19 años.',
            'descripcion' => 'En ocasiones se cree que el liderazgo es para algunos cuantos y que no se tiene la oportunidad de desarrollarlo. A través de dinámicas creativas se descubre las formas de ser que se requieren para aplicar un liderazgo que sume a la vida de cada participante. Se descubren los tipos de liderazgo que existen. Se identifican y trabajan factores como responsabilidad, escucha y equipo que son clave para aplicar un liderazgo en la vida de cada participante.',
            'tipo' => 'liderazgo',
            'img' => 'hakuna_matata_01.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('workshops')->insert([
            'nombre' => 'Coaching para Trabajo en Equipo y comunicación Efectiva',
            'dirigido_a' => 'Capital Humano cuyas funciones sea la colaboración para lograr objetivos planteados a corto, mediano y largo plazo.',
            'descripcion' => 'En un grupo de personas se requieren ciertos elementos clave para un ambiente idóneo que contribuyan a el cumplimiento de tareas, que sumándolas se obtenga un resultado temporal o final deseado. A través de herramientas, sugerencias, técnicas y coaching se logrará un nuevo nivel de consciencia de la importancia de la comunicación hacia cada uno de los integrantes del grupo. Se realizará un análisis a detalle del comportamiento actúa y del deseado a través de tareas especificas que generen ese deseo en una realidad. El participante sin duda alguna generará una nueva perspectiva para trabajar con personas para el logro de metas.',
            'tipo' => 'coaching',
            'img' => 'coaching_teamwork_01.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('workshops')->insert([
            'nombre' => 'Alineación para EC0217 – EC0301 “Diseño e Impartición de Cursos de Formación de Capital Humano”',
            'dirigido_a' => 'Público en General, con interés de desempeñar funciones que requieran estar frente a un grupo de personas y el diseño de cursos de formación de Capital humano.',
            'descripcion' => 'Basado en el EC0217 “Impartición de Cursos de formación de Capital humano de manera presencial grupal” y el EC0301 “Diseño de cursos de formación de Capital humano de manera presencial grupal, sus instrumentos de evaluación y manuales de curso”.  Conoce el proceso para diseñar un curso y sus productos y metodología para la elaboración de objetivos generales y particulares. Así como la metodología para impartir cursos basado en sus 3 elementos. Técnicas instruccionales y dominios del aprendizaje.',
            'tipo' => 'certificacion',
            'img' => 'alineacion_EC0217.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        DB::table('workshops')->insert([
            'nombre' => 'Alineación para EC0076 “Evaluación de la competencia de candidatos con base en Estándares de competencia”',
            'dirigido_a' => 'Capital humano que sus funciones sean evaluar los conocimientos, desempeños, actitudes, hábitos y valores en cualquier estándar de competencia.',
            'descripcion' => 'Basado en el EC0076 para el conocimiento y aplicación de los 4 elementos que requiere el estándar de competencia para obtener la certificación del mismo.',
            'tipo' => 'certificacion',
            'img' => 'alineacion_EC0076.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
