<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
            [
                ['title' => 'Administrativo'],

                ['title' => 'Constitucional'],

                ['title' => 'Penal'],

                ['title' => 'Procesal'],

                ['title' => 'Laboral'],

                ['title' => 'Tributario'],

                ['title' => 'Comercial'],

                ['title' => 'Sucesiones'],

                ['title' => 'Daños y perjuicios'],

                ['title' => 'ARBA'],

                ['title' => 'AFIP'],

                ['title' => 'Pymes'],

                ['title' => 'Monotributo'],

                ['title' => 'Economía'],

                ['title' => 'Inmobiliario'],

                ['title' => 'Seguros'],

                ['title' => 'Trabajo'],

                ['title' => 'Constitución'],

                ['title' => 'SCBA'],

                ['title' => 'Civil']
            ]
        );
    }
}
