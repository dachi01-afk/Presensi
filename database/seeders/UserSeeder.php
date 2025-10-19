<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'role_id' => 1, 'email' => 'admin@kampus.ac.id', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'role_id' => 2, 'email' => 'budi@dosen.ac.id', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'role_id' => 2, 'email' => 'siti@dosen.ac.id', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'role_id' => 3, 'email' => 'andi@mahasiswa.ac.id', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'role_id' => 3, 'email' => 'dewi@mahasiswa.ac.id', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
