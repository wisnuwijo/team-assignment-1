<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("123123123"),
            "place_of_birth" => "Kudus",
            "date_of_birth" => "1999-10-17",
            "gender" => "male",
            "created_at" => now()
        ]);
    }
}
