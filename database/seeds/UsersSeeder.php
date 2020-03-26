<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Abdul Muchtar Astria",
            "username" => "abdul.muchtar",
            "nik" => 666,
            "email" => "abdul.muchtar@pins.co.id",
            "role" => 'administrator',
            "password" => bcrypt('semangART'),
            "status" => 1,
        ]);
    }
}
