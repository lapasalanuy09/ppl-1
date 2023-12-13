<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "nama"=> "Admin",
            "email"=> "admin@gmail.com",
            "role"=> "admin",
            "password"=> bcrypt("admin321"),
        ]);

        User::create([
            "nama"=> "User",
            "email"=> "user@gmail.com",
            "role"=> "user",
            "password"=> bcrypt("user321"),
        ]);
    }
}
