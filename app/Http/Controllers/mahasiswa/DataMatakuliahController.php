<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use App\Models\JadwalMahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DataMatakuliahController extends Controller
{
    public function index()
    {
        // Ambil ID mahasiswa yang sedang login
        $mahasiswaId = Auth::user()->mahasiswa->id ?? null;

        // Ambil semua jadwal kuliah yang diikuti mahasiswa
        $jadwals = JadwalMahasiswa::with(['jadwalKuliah.mataKuliah', 'jadwalKuliah.kelas', 'jadwalKuliah.dosen'])
            ->where('mahasiswa_id', $mahasiswaId)
            ->get()
            ->pluck('jadwalKuliah');

        return view('mahasiswa.data_matakuliah', compact('jadwals'));
    }
}
