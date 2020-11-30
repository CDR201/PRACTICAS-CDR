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
        // $this->call(UsersTableSeeder::class);
        App\User:: create([
            'name'=>'carol',
            'email'=>'cdr@gmail.com',
            'password'=>bcrypt('22222222'),
        ]);
    }
}
