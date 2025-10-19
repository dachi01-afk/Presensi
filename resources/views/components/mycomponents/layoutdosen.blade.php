<!DOCTYPE html>
<html lang="id" x-data="{ openSidebar: false }" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Presensi Kampus</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200 shadow-sm">
        <div class="flex items-center justify-between px-4 py-3">
            <!-- Kiri -->
            <div class="flex items-center space-x-2">
                <!-- Tombol sidebar -->
                <button @click="openSidebar = !openSidebar"
                    class="inline-flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none lg:hidden">
                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Logo -->
                <a href="#" class="flex items-center space-x-2">
                    <div
                        class="w-8 h-8 rounded-full bg-kampus-utama flex items-center justify-center text-white font-bold text-xs">
                        LOGO
                    </div>
                    <span class="text-base font-semibold text-gray-900 md:inline">Presensi Kampus</span>
                </a>
            </div>

            <!-- Kanan (Profil user / logout / dll) -->
            <div class="flex items-center space-x-3">
                <button class="p-2 rounded-full bg-kampus-terang hover:bg-kampus-utama hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A9 9 0 1118.364 4.56a9 9 0 01-13.243 13.243z" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Overlay (muncul di mobile saat sidebar dibuka) -->
    <div x-show="openSidebar" x-transition.opacity @click="openSidebar = false"
        class="fixed inset-0 bg-gray-900/50 z-40 lg:hidden">
    </div>

    <!-- Sidebar -->
    <aside :class="openSidebar ? 'translate-x-0' : '-translate-x-full'"
        class="fixed top-[64px] left-0 z-50 w-64 h-[calc(100%-64px)] bg-kampus-gelap text-white pt-4 transition-transform duration-300 ease-in-out lg:translate-x-0 overflow-y-auto">
        <ul class="space-y-2 px-3">
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg hover:bg-kampus-utama transition">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7m-9 2v8" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-2 rounded-lg hover:bg-kampus-utama transition">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Presensi
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-2 rounded-lg hover:bg-kampus-utama transition">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                    </svg>
                    Jadwal Kuliah
                </a>
            </li>
        </ul>
    </aside>

    <!-- Konten utama -->
    <main class="p-4 lg:ml-64 mt-16 lg:mt-20 max-w-full overflow-x-hidden">
        {{ $slot }}
    </main>

</body>

</html>
