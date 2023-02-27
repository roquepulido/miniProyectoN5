<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carreras;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = [["Sin Carrera", "Sin Informacion"], ["Ingeniería en Mecatrónica", "Como Ingeniero en Mecatrónica integrarás la mecánica, electrónica e informática en el diseño y desarrollo de productos o procesos que cumplan su función de forma automatizada, para incrementar el bienestar y la seguridad de todos los habitantes del planeta."], ["Licenciatura en Derecho", "Como Licenciado en Derecho obtendrás las competencias para diseñar y poner en práctica estrategias legales que brinden las mejores soluciones en procesos jurídicos, logrando que las personas y organizaciones se rijan por leyes que permitan que la sociedad funcione justa y ordenadamente."], ["Ingeniería en Desarrollo de Software", "Como Ingeniero en Desarrollo de Software, podrás aportar soluciones a problemas reales de diversas disciplinas, a través de la creación de aplicaciones computacionales que requerirán tu intervención en las fases de análisis, diseño, implementación y pruebas de software."]];

        foreach ($carreras as $carrera) {

            Carreras::create([
                'name' => $carrera[0],
                'description' => $carrera[1]
            ]);
        }
    }
}
