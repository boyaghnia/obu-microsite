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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Tugas dan Fungsi PPID</h1>
            <p class="text-xl text-gray-300">Pejabat Pengelola Informasi dan Dokumentasi</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Tugas dan Fungsi"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "tugas-fungsi", "openPpid" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Tugas dan Fungsi PPID</h2>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Tugas PPID</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                                Berdasarkan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik dan
                                Peraturan Komisi Informasi, PPID memiliki tugas utama sebagai berikut:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                <li>Penyimpanan, pendokumentasian, penyediaan dan pelayanan informasi</li>
                                <li>Pengujian konsekuensi informasi yang dikecualikan</li>
                                <li>Penetapan informasi yang dapat diakses oleh publik</li>
                                <li>Pengusulan standar biaya perolehan informasi</li>
                            </ul>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Fungsi PPID</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                                Dalam melaksanakan tugasnya, PPID menyelenggarakan fungsi-fungsi sebagai berikut:
                            </p>
                            <div class="space-y-4">
                                <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-2">
                                        1. Pengelolaan Informasi
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Melakukan pengumpulan, pengklasifikasian, dan penyimpanan informasi publik yang
                                        berada di lingkungan Kantor OBU Wilayah XII - Bandung.
                                    </p>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-2">2. Pelayanan Informasi</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Memberikan pelayanan informasi publik kepada masyarakat sesuai dengan peraturan
                                        perundang-undangan yang berlaku.
                                    </p>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-2">
                                        3. Koordinasi dan Konsultasi
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Melakukan koordinasi dengan unit kerja terkait dan konsultasi dengan Komisi
                                        Informasi dalam rangka pelayanan informasi publik.
                                    </p>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <h4 class="font-bold text-gray-800 dark:text-white mb-2">4. Pengembangan Sistem</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Mengembangkan dan meningkatkan sistem pengelolaan dan pelayanan informasi publik
                                        secara berkala.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 p-6 bg-yellow-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
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
                                Catatan Penting
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Pelaksanaan tugas dan fungsi PPID dilakukan dengan prinsip transparansi, akuntabilitas,
                                dan efisiensi dalam rangka mewujudkan tata kelola pemerintahan yang baik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
