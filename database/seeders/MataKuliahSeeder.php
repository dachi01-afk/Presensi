<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliahs')->insert([
            ['id' => 1, 'kode_mk' => 'IF101', 'nama_mk' => 'Algoritma dan Pemrograman', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'kode_mk' => 'IF102', 'nama_mk' => 'Struktur Data', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'kode_mk' => 'SI103', 'nama_mk' => 'Basis Data', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'kode_mk' => 'IF104', 'nama_mk' => 'Pemrograman Web', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'kode_mk' => 'IF105', 'nama_mk' => 'Jaringan Komputer', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
