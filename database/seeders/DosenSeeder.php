<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            ['id' => 1, 'user_id' => 2, 'nip' => '19800315 200901 1 001', 'nama_dosen' => 'Drs. Budi Santoso, M.Kom', 'prodi' => 'Informatika', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'user_id' => 3, 'nip' => '19791220 200802 1 002', 'nama_dosen' => 'Dr. Siti Rahmawati, M.T', 'prodi' => 'Sistem Informasi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'user_id' => 2, 'nip' => '19850111 201001 1 003', 'nama_dosen' => 'Ahmad Fajar, M.Kom', 'prodi' => 'Informatika', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'user_id' => 3, 'nip' => '19870522 201204 1 004', 'nama_dosen' => 'Rina Kusuma, M.Si', 'prodi' => 'Manajemen Informatika', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'user_id' => 2, 'nip' => '19891015 201408 1 005', 'nama_dosen' => 'Yudi Hartono, M.Kom', 'prodi' => 'Teknik Komputer', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
