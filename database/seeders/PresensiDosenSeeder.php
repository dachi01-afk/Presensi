<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PresensiDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('presensi_dosens')->insert([
            ['id' => 1, 'dosen_id' => 1, 'tanggal' => '2025-10-18', 'jam_masuk' => '2025-10-18 07:55:00', 'jam_pulang' => '2025-10-18 15:00:00', 'status' => 'hadir', 'keterangan' => 'Tepat waktu', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'dosen_id' => 2, 'tanggal' => '2025-10-17', 'jam_masuk' => '2025-10-17 09:10:00', 'jam_pulang' => '2025-10-17 16:10:00', 'status' => 'hadir', 'keterangan' => 'Sedikit terlambat', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'dosen_id' => 3, 'tanggal' => '2025-10-16', 'jam_masuk' => null, 'jam_pulang' => null, 'status' => 'izin', 'keterangan' => 'Izin menghadiri seminar', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'dosen_id' => 4, 'tanggal' => '2025-10-18', 'jam_masuk' => '2025-10-18 13:00:00', 'jam_pulang' => '2025-10-18 15:30:00', 'status' => 'hadir', 'keterangan' => 'Mengajar kelas MI-1B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'dosen_id' => 5, 'tanggal' => '2025-10-15', 'jam_masuk' => null, 'jam_pulang' => null, 'status' => 'alpha', 'keterangan' => 'Tidak hadir tanpa keterangan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
