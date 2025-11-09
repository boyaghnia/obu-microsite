@extends("app")

@section("content")
    <!-- Hero Section -->
    <section class="relative bg-gray-900 h-96 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1517400508447-f8dd518b86db?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="Hero"
                class="w-full h-full object-cover opacity-30"
            />
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-gray-900/50 to-gray-900/90"></div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Kontak PPID</h1>
            <p class="text-xl text-gray-300">Hubungi Kami</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Kontak"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "kontak", "openPpid" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Kontak PPID</h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-8">
                            Untuk mendapatkan informasi lebih lanjut atau mengajukan permohonan informasi publik,
                            silakan hubungi kami melalui:
                        </p>

                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <svg
                                            class="w-5 h-5 text-white"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                            ></path>
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-gray-800 dark:text-white">Alamat</h3>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Jl. Soekarno Hatta No.XXX
                                    <br />
                                    Bandung, Jawa Barat
                                    <br />
                                    Indonesia
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <svg
                                            class="w-5 h-5 text-white"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-gray-800 dark:text-white">Telepon</h3>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    (022) XXXX-XXXX
                                    <br />
                                    Fax: (022) XXXX-XXXX
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <svg
                                            class="w-5 h-5 text-white"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-gray-800 dark:text-white">Email</h3>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    ppid@obu12.dephub.go.id
                                    <br />
                                    info@obu12.dephub.go.id
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <svg
                                            class="w-5 h-5 text-white"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-bold text-gray-800 dark:text-white">Jam Layanan</h3>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Senin - Jumat: 08:00 - 16:00 WIB
                                    <br />
                                    Sabtu, Minggu & Libur: Tutup
                                </p>
                            </div>
                        </div>

                        <div class="p-6 bg-yellow-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3">Petugas PPID</h3>
                            <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                                <p>
                                    <strong>Nama:</strong>
                                    [Nama Petugas PPID]
                                </p>
                                <p>
                                    <strong>Jabatan:</strong>
                                    Pejabat Pengelola Informasi dan Dokumentasi
                                </p>
                                <p>
                                    <strong>NIP:</strong>
                                    [NIP Petugas]
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
