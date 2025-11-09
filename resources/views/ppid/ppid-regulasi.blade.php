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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Regulasi PPID</h1>
            <p class="text-xl text-gray-300">Dasar Hukum dan Peraturan</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Regulasi"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "regulasi", "openPpid" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Regulasi PPID</h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-6">
                            Berikut adalah dasar hukum dan peraturan yang menjadi landasan pelaksanaan tugas PPID:
                        </p>

                        <div class="space-y-4">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Undang-Undang Nomor 14 Tahun 2008
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tentang Keterbukaan Informasi Publik
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Peraturan Pemerintah Nomor 61 Tahun 2010
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi
                                    Publik
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Peraturan Komisi Informasi Nomor 1 Tahun 2010
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tentang Standar Layanan Informasi Publik
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Peraturan Menteri Perhubungan
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tentang Pengelolaan Informasi Publik di lingkungan Kementerian Perhubungan
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Peraturan Direktur Jenderal Perhubungan Udara
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tentang Pedoman Pelaksanaan Pelayanan Informasi Publik di lingkungan Direktorat
                                    Jenderal Perhubungan Udara
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 p-6 bg-yellow-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                <svg
                                    class="w-5 h-5 text-yellow-500"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                                    ></path>
                                </svg>
                                Informasi Tambahan
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Peraturan-peraturan di atas menjadi landasan hukum dalam pengelolaan dan pelayanan
                                informasi publik di Kantor OBU Wilayah XII - Bandung. Untuk informasi lebih detail
                                mengenai regulasi, silakan hubungi PPID kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
