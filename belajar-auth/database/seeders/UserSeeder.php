<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Clerk (Petugas Laundry)
        User::create([
            'name' => 'Clerk Laundry',
            'email' => 'clerk@laundry.com',
            'password' => Hash::make('password123'),
            'role' => 'clerk',
        ]);

        // Akun Client (Pelanggan)
        User::create([
            'name' => 'Klien Biasa',
            'email' => 'client@laundry.com',
            'password' => Hash::make('password123'),
            'role' => 'client',
        ]);
    }
}