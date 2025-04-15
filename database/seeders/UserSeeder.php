<?php

namespace Database\Seeders;

use App\Models\Bahan;
use App\Models\Kemasan;
use App\Models\Product;
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
        User::create([
            'username' => 'Admin User',
            'company' => 'Pt User',
            'npwp' => '0129091',
            'role' => 'user',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Change this
        ]);
        Kemasan::create([
            'name' => 'Kemasan masterbox',
            'bahan' => 'kardus',
            'tipe' => 'masterbox',
            'harga' => '1200',
            'gambar' => 'dkk',
        ]);
        Kemasan::create([
            'name' => 'Kemasan Innerbox',
            'bahan' => 'kardus',
            'tipe' => 'innerbox',
            'harga' => '600',
            'gambar' => 'dkk',
        ]);
        Kemasan::create([
            'name' => 'Kemasan outerbox',
            'bahan' => 'kardus',
            'tipe' => 'outerbox',
            'harga' => '600',
            'gambar' => 'dkk',
        ]);
        Kemasan::create([
            'name' => 'Kemasan primer',
            'bahan' => 'kardus',
            'tipe' => 'primer',
            'harga' => '400',
            'gambar' => 'dkk',
        ]);
        Bahan::create([
            'name' => 'jeruk',
            'tipe' => 'cairan',
            'satuan' => 'ml',
            'harga' => '60',
        ]);
        Bahan::create([
            'name' => 'air',
            'tipe' => 'cairan',
            'satuan' => 'ml',
            'harga' => '10',
        ]);
    }
}
