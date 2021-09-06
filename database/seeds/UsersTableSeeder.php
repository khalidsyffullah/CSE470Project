<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'khalid Syffullah',
            'email' => 'khalidsaiffullah28@gmail.com',
            'password' => '12345', 
        ]);

        User::create([
            'name' => 'khalid ',
            'email' => 'khalidsaiffullah29@gmail.com',
            'password' => '12345', 
        ]);
    }
}
