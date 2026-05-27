<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = "SUPER ADMIN";
        $admin->email="admin@gmail.com";
        $admin->password = bcrypt('1234');
        $admin->save();
    }
}
