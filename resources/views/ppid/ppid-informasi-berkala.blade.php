@extends("app")

@section("content")
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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Informasi Berkala</h1>
            <p class="text-xl text-gray-300">Informasi yang Wajib Disediakan dan Diumumkan Secara Berkala</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Informasi Berkala"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "informasi-berkala", "openInformasi" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Informasi Berkala</h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-6">
                            Informasi Berkala adalah informasi yang wajib disediakan dan diumumkan secara berkala oleh
                            Badan Publik paling kurang 6 (enam) bulan sekali. Berikut adalah daftar informasi berkala
                            yang tersedia:
                        </p>

                        <div class="space-y-4">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        1
                                    </div>
                                    Profil Badan Publik
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 ml-8">
                                    Informasi mengenai profil, struktur organisasi, visi, misi, tugas dan fungsi Kantor
                                    OBU Wilayah XII - Bandung.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        2
                                    </div>
                                    Program dan Kegiatan
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 ml-8">
                                    Rencana kerja, program kegiatan, dan laporan pelaksanaan kegiatan.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        3
                                    </div>
                                    Laporan Keuangan
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 ml-8">
                                    Ringkasan informasi tentang pengelolaan keuangan yang terbuka untuk diketahui oleh
                                    publik.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        4
                                    </div>
                                    Regulasi dan Kebijakan
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 ml-8">
                                    Peraturan, keputusan, dan kebijakan yang mengikat dan/atau berdampak bagi publik.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        5
                                    </div>
                                    Laporan Akses Informasi Publik
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 ml-8">
                                    Statistik layanan informasi publik yang telah diberikan kepada masyarakat.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-gray-800 dark:text-white mb-2 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        6
                                    </div>
                                    Informasi Pengadaan Barang dan Jasa
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 ml-8">
                                    Informasi tentang pengadaan barang dan jasa sesuai dengan ketentuan peraturan
                                    perundang-undangan.
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
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                                Catatan
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Informasi berkala diumumkan melalui website resmi dan papan pengumuman di kantor. Untuk
                                mendapatkan salinan dokumen, silakan ajukan permohonan melalui formulir yang tersedia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
