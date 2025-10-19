<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Presensi Kampus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Sidebar + Content Wrapper -->
    <div x-data="{ open: false }" class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 w-64 bg-blue-800 text-white transform transition-transform duration-300 ease-in-out md:translate-x-0 z-50">
            <div class="flex items-center justify-between p-4 border-b border-blue-700">
                <h1 class="text-2xl font-bold">Presensi Kampus</h1>
                <button @click="open = false" class="md:hidden text-white focus:outline-none">
                    ✕
                </button>
            </div>
            <nav class="p-4 space-y-2">
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-700">🏠 Dashboard</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-700">👩‍🏫 Data Dosen</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-700">🎓 Data Mahasiswa</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-700">📚 Mata Kuliah</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-700">🕒 Jadwal Kuliah</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-700">📝 Presensi</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-blue-700">⚙️ Pengaturan</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col md:ml-64">
            <!-- Header -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <button @click="open = true" class="md:hidden text-gray-600 focus:outline-none">
                    ☰
                </button>
                <h2 class="text-xl font-semibold text-gray-700">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700 font-medium">Admin Kampus</span>
                    <img src="https://ui-avatars.com/api/?name=Admin" alt="Profile"
                        class="w-10 h-10 rounded-full border">
                </div>
            </header>

            <!-- Content Section -->
            <main class="p-6 overflow-y-auto">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan Data</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white shadow rounded-xl p-4 flex items-center justify-between border-l-4 border-blue-500">
                        <div>
                            <p class="text-gray-600">Dosen</p>
                            <h4 class="text-2xl font-bold">32</h4>
                        </div>
                        <div class="text-blue-500 text-4xl">👩‍🏫</div>
                    </div>

                    <div
                        class="bg-white shadow rounded-xl p-4 flex items-center justify-between border-l-4 border-green-500">
                        <div>
                            <p class="text-gray-600">Mahasiswa</p>
                            <h4 class="text-2xl font-bold">420</h4>
                        </div>
                        <div class="text-green-500 text-4xl">🎓</div>
                    </div>

                    <div
                        class="bg-white shadow rounded-xl p-4 flex items-center justify-between border-l-4 border-yellow-500">
                        <div>
                            <p class="text-gray-600">Mata Kuliah</p>
                            <h4 class="text-2xl font-bold">25</h4>
                        </div>
                        <div class="text-yellow-500 text-4xl">📘</div>
                    </div>

                    <div
                        class="bg-white shadow rounded-xl p-4 flex items-center justify-between border-l-4 border-red-500">
                        <div>
                            <p class="text-gray-600">Presensi Hari Ini</p>
                            <h4 class="text-2xl font-bold">85%</h4>
                        </div>
                        <div class="text-red-500 text-4xl">🕒</div>
                    </div>
                </div>

                <!-- Recent Activity Table -->
                <div class="mt-8 bg-white shadow rounded-xl overflow-hidden">
                    <div class="p-4 border-b">
                        <h3 class="text-gray-800 font-semibold">Aktivitas Terbaru</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-gray-700">
                            <thead class="bg-gray-50 border-b">
                                <tr>
                                    <th class="px-4 py-3 text-left">Tanggal</th>
                                    <th class="px-4 py-3 text-left">Nama</th>
                                    <th class="px-4 py-3 text-left">Peran</th>
                                    <th class="px-4 py-3 text-left">Kegiatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3">18 Okt 2025</td>
                                    <td class="px-4 py-3">Budi Santoso</td>
                                    <td class="px-4 py-3">Mahasiswa</td>
                                    <td class="px-4 py-3">Absen di Matkul Pemrograman Web</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3">18 Okt 2025</td>
                                    <td class="px-4 py-3">Dr. Ani Suryani</td>
                                    <td class="px-4 py-3">Dosen</td>
                                    <td class="px-4 py-3">Membuat token presensi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
