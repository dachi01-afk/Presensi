<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            ['id' => 1, 'user_id' => 4, 'nip' => '2211001', 'nama_mahasiswa' => 'Andi Saputra', 'prodi' => 'Informatika', 'kelas' => 'IF-3A', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'user_id' => 5, 'nip' => '2211002', 'nama_mahasiswa' => 'Dewi Lestari', 'prodi' => 'Sistem Informasi', 'kelas' => 'SI-2B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'user_id' => 4, 'nip' => '2211003', 'nama_mahasiswa' => 'Rizky Maulana', 'prodi' => 'Teknik Komputer', 'kelas' => 'TK-1A', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'user_id' => 5, 'nip' => '2211004', 'nama_mahasiswa' => 'Sari Wulandari', 'prodi' => 'Manajemen Informatika', 'kelas' => 'MI-1B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'user_id' => 4, 'nip' => '2211005', 'nama_mahasiswa' => 'Bambang Hidayat', 'prodi' => 'Informatika', 'kelas' => 'IF-3B', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
