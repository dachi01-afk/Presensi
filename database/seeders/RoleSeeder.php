<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name_role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name_role' => 'dosen', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name_role' => 'mahasiswa', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
