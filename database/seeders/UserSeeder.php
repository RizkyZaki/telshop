<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::updateOrCreate(
            ['email' => 'admin@kampus.com'],
            [
                'name' => 'Admin Kampus',
                'username' => 'adminkampus',
                'email' => 'admin@kampus.com',
                'password' => Hash::make('admin123'),
                'phone' => '08123456789',
                'address' => 'Jl. Kampus No. 1, Kota Pelajar',
                'role' => 'admin',
            ]
        );
    }
}
