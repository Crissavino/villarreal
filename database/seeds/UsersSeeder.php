<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Fernando',
                    'lastName' => 'Villarreal',
                    'email' => 'fer@villa.com',
                    'isAdmin' => 1,
                    'password' => '$2y$12$MbPPtQESrE1Oe7CPC5oYQeeICbZJMq0.zZaJhPV15IQaae9uQ.v62'
                ],
                [
                    'name' => 'Luis',
                    'lastName' => 'Villarreal',
                    'email' => 'luis@villa.com',
                    'isAdmin' => 1,
                    'password' => '$2y$12$MbPPtQESrE1Oe7CPC5oYQeeICbZJMq0.zZaJhPV15IQaae9uQ.v62'
                ],
                [
                    'name' => 'Cristian',
                    'lastName' => 'Savino',
                    'email' => 'savinocristian89@gmail.com',
                    'isAdmin' => 1,
                    'password' => '$2y$12$MbPPtQESrE1Oe7CPC5oYQeeICbZJMq0.zZaJhPV15IQaae9uQ.v62'
                ]
            ]
        );
    }
}
