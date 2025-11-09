<x-mycomponents.layoutmahasiswa>
    <main id="main-content" class="p-4 lg:ml-64 mt-16 lg:mt-20">
        <h1 class="text-2xl font-semibold text-gray-900 mb-4">Riwayat Presensi</h1>

        <div class="bg-white p-4 rounded-lg shadow mb-4">
            <form method="GET" action="{{ route('mahasiswa.riwayat_presensi') }}" class="grid md:grid-cols-4 gap-3">
                <div>
                    <label class="text-sm text-gray-600">Dari Tanggal</label>
                    <input type="date" name="dari" class="w-full border rounded p-2" value="{{ request('dari') }}">
                </div>
                <div>
                    <label class="text-sm text-gray-600">Sampai Tanggal</label>
                    <input type="date" name="sampai" class="w-full border rounded p-2"
                        value="{{ request('sampai') }}">
                </div>
                <div>
                    <label class="text-sm text-gray-600">Mata Kuliah</label>
                    <select name="matkul" class="w-full border rounded p-2">
                        <option value="">Semua</option>
                        @foreach ($matkuls as $matkul)
                            <option value="{{ $matkul->id }}"
                                {{ request('matkul') == $matkul->id ? 'selected' : '' }}>
                                {{ $matkul->nama_mk }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Tampilkan
                    </button>
                </div>
            </form>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Mata Kuliah</th>
                        <th class="px-4 py-2">Jam Mulai</th>
                        <th class="px-4 py-2">Jam Selesai</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($presensis as $key => $presensi)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($presensi->tanggal)->format('d-m-Y') }}</td>
                            <td class="px-4 py-2">
                                {{ $presensi->jadwalKuliah->mataKuliah->nama_mk ?? '-' }}
                            </td>
                            <td class="px-4 py-2">
                                {{ $presensi->jadwalKuliah->jam_mulai ?? '-' }}
                            </td>
                            <td class="px-4 py-2">
                                {{ $presensi->jadwalKuliah->jam_selesai ?? '-' }}
                            </td>
                            <td
                                class="px-4 py-2 capitalize {{ $presensi->status == 'hadir' ? 'text-green-600' : 'text-red-600' }}">
                                {{ $presensi->status }}
                            </td>
                            <td class="px-4 py-2">{{ $presensi->keterangan }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-gray-500 py-4">Belum ada data presensi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</x-mycomponents.layoutmahasiswa>
