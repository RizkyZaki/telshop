<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Ecommerce Kampus',
                'keyword' => 'ecommerce, kampus, online shop, laravel',
                'tagline' => 'Belanja Mudah dan Cepat untuk Mahasiswa',
                'description' => 'Situs ecommerce kampus yang menyediakan berbagai kebutuhan mahasiswa dengan harga terjangkau.',
                'logo' => 'default-logo.png',
                'email' => 'contact@ecommercekampus.com',
                'address' => 'Jl. Kampus No. 1, Kota Pelajar',
                'phone' => '08123456789',
                'ig' => 'https://instagram.com/ecommercekampus',
                'yt' => 'https://youtube.com/ecommercekampus',
                'fb' => 'https://facebook.com/ecommercekampus',
                'twitter' => 'https://twitter.com/ecommercekampus',
            ]
        );
    }
}
