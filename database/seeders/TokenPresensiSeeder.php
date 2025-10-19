<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TokenPresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('token_presensis')->insert([
            ['id' => 1, 'jadwal_id' => 1, 'dosen_id' => 1, 'token' => 'AB12CD', 'waktu_mulai' => now()->subMinutes(15), 'waktu_selesai' => now()->addMinutes(45), 'status' => 'aktif', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'jadwal_id' => 2, 'dosen_id' => 2, 'token' => 'EF34GH', 'waktu_mulai' => now()->subHour(), 'waktu_selesai' => now()->subMinutes(10), 'status' => 'kedaluwarsa', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'jadwal_id' => 3, 'dosen_id' => 3, 'token' => 'IJ56KL', 'waktu_mulai' => now()->addMinutes(10), 'waktu_selesai' => now()->addHour(), 'status' => 'nonaktif', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'jadwal_id' => 4, 'dosen_id' => 4, 'token' => 'MN78OP', 'waktu_mulai' => now()->subMinutes(30), 'waktu_selesai' => now()->addMinutes(30), 'status' => 'aktif', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'jadwal_id' => 5, 'dosen_id' => 5, 'token' => 'QR90ST', 'waktu_mulai' => now()->subHours(2), 'waktu_selesai' => now()->subHour(), 'status' => 'kedaluwarsa', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
