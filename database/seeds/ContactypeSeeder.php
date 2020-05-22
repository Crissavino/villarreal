<?php

use Illuminate\Database\Seeder;

class ContactypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacttypes')->insert(
            [
                [
                    'title' => 'Laboral',
                ],
                [
                    'title' => 'Civil',
                ],
                [
                    'title' => 'Comercial',
                ],
                [
                    'title' => 'Sucesión',
                ],
                [
                    'title' => 'Daños y Perjuicios',
                ],
                [
                    'title' => 'Derecho de Familia',
                ],
                [
                    'title' => 'Asesoramiento Empresarial / Constitución',
                ],
                [
                    'title' => 'Derecho Tributario',
                ],
                [
                    'title' => 'Aseguradoras y Póliza de Seguro',
                ],
                [
                    'title' => 'Jubilaciones y Pensiones',
                ],
                [
                    'title' => 'Reclamos ante Organismo Estatal',
                ]
            ]
        );
    }
}














