<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TagSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CreatorsSeeder::class);
        $this->call(ContactypeSeeder::class);
    }
}
