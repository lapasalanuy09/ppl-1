<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "name"=> "Admin",
            "email"=> "admin@gmail.com",
            "role"=> "admin",
            "password"=> bcrypt("admin321"),
        ]);

        Admin::create([
            "name"=> "User",
            "email"=> "user@gmail.com",
            "role"=> "user",
            "password"=> bcrypt("user321"),
        ]);
    }
}
