<?php

namespace App\Http\Controllers\mahasiswa;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\PresensiMahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RiwayatPresensiController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $query = PresensiMahasiswa::with(['jadwalKuliah.mataKuliah'])
            ->where('mahasiswa_id', $user->id);

        if ($request->filled('dari')) {
            $query->whereDate('tanggal', '>=', $request->dari);
        }

        if ($request->filled('sampai')) {
            $query->whereDate('tanggal', '<=', $request->sampai);
        }

        if ($request->filled('matkul')) {
            // filter berdasarkan mata kuliah melalui relasi jadwalKuliah
            $query->whereHas('jadwalKuliah', function ($q) use ($request) {
                $q->where('mata_kuliah_id', $request->matkul);
            });
        }

        $presensis = $query->orderBy('tanggal', 'desc')->get();
        $matkuls = MataKuliah::all();

        return view('mahasiswa.riwayat_presensi', compact('presensis', 'matkuls'));
    }
}
