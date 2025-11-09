<?php

namespace App\Http\Controllers\mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\MataKuliah;
use App\Models\JadwalMahasiswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil data mahasiswa berdasarkan user_id
        $mahasiswa = Mahasiswa::where('user_id', $user->id)->first();

        // Statistik cepat
        $totalMahasiswa = Mahasiswa::count();
        $totalDosen = Dosen::count();
        $totalKelas = Kelas::count();
        $totalMataKuliah = MataKuliah::count();

        // Hari ini (Senin, Selasa, dst)
        $hariIni = Carbon::now()->locale('id')->translatedFormat('l');

        // Ambil jadwal kuliah mahasiswa berdasarkan hari ini
        $jadwals = JadwalMahasiswa::with(['jadwalKuliah.dosen', 'jadwalKuliah.mataKuliah', 'jadwalKuliah.kelas'])
            ->where('mahasiswa_id', $mahasiswa->id)
            ->whereHas('jadwalKuliah', function ($query) use ($hariIni) {
                $query->where('hari', $hariIni);
            })
            ->get()
            ->pluck('jadwalKuliah');

        return view('mahasiswa.dashboard', compact(
            'totalMahasiswa',
            'totalDosen',
            'totalKelas',
            'totalMataKuliah',
            'hariIni',
            'jadwals'
        ));
    }
}
