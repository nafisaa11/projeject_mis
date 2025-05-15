<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // pastikan namespace User sesuai dengan struktur project-mu

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'user_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Bagas Prayogi',
                'email' => 'yogi@example.com',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ],
            [
                'name' => 'Nailus Saadah',
                'email' => 'nailus@example.com',
                'password' => Hash::make('password123'),
                'role' => 'dosen',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
