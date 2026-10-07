<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username'     => 'budi',
            'nama_lengkap' => 'Budi Santoso',
            'password'     => Hash::make('budi123'),
        ]);

        User::create([
            'username'     => 'chyntia',
            'nama_lengkap' => 'Chyntia Aulya Libela',
            'password'     => Hash::make('chyntia123'),
        ]);
    }
}