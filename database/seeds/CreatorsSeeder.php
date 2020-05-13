<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creators')->insert(
            [
                [
                    'userName' => 'Fernando',
                    'user_id' => 1,
                ],
                [
                    'userName' => 'Luis',
                    'user_id' => 2,
                ]
            ]
        );
    }
}
