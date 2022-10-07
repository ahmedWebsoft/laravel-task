<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            "name" => "Abdul Waheed",
            "email" => "waheed@example.com",
            "password" => Hash::make(123456),
            "user_type" => 0,
            "role_id" => 1
        ]);
    }
}
