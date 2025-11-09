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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Informasi Setiap Saat</h1>
            <p class="text-xl text-gray-300">Informasi yang Wajib Tersedia Setiap Saat</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Informasi Setiap Saat"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "informasi-setiap-saat", "openInformasi" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Informasi Setiap Saat</h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-6">
                            Informasi Setiap Saat adalah informasi yang wajib tersedia setiap saat dan dapat diakses
                            oleh publik. Informasi ini tidak terikat oleh waktu tertentu dan selalu diperbaharui sesuai
                            dengan perkembangan.
                        </p>

                        <div class="grid md:grid-cols-2 gap-4 mb-8">
                            <div class="p-6 bg-blue-50 dark:bg-blue-900/20 rounded-xl border-l-4 border-blue-500">
                                <h3 class="font-bold text-blue-700 dark:text-blue-400 mb-2">Daftar Informasi Publik</h3>
                                <p class="text-sm text-blue-600 dark:text-blue-300">
                                    Katalog seluruh informasi publik yang berada di bawah penguasaan Badan Publik.
                                </p>
                            </div>

                            <div class="p-6 bg-blue-50 dark:bg-blue-900/20 rounded-xl border-l-4 border-blue-500">
                                <h3 class="font-bold text-blue-700 dark:text-blue-400 mb-2">Hasil Keputusan</h3>
                                <p class="text-sm text-blue-600 dark:text-blue-300">
                                    Hasil keputusan dan pertimbangan yang menjadi dasar kebijakan publik.
                                </p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">
                                Kategori Informasi Setiap Saat:
                            </h3>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        1
                                    </div>
                                    Informasi Tentang Peraturan
                                </h4>
                                <ul
                                    class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-8"
                                >
                                    <li>Peraturan perundang-undangan terkait penerbangan</li>
                                    <li>Standar operasional prosedur</li>
                                    <li>Kebijakan dan pedoman teknis</li>
                                </ul>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        2
                                    </div>
                                    Informasi Tentang Organisasi
                                </h4>
                                <ul
                                    class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-8"
                                >
                                    <li>Profil dan sejarah organisasi</li>
                                    <li>Struktur organisasi dan tata kerja</li>
                                    <li>Data pegawai dan pejabat</li>
                                </ul>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        3
                                    </div>
                                    Informasi Tentang Kegiatan
                                </h4>
                                <ul
                                    class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-8"
                                >
                                    <li>Agenda kegiatan resmi</li>
                                    <li>Laporan hasil inspeksi dan pengawasan</li>
                                    <li>Statistik operasional bandara</li>
                                </ul>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        4
                                    </div>
                                    Informasi Tentang Kinerja
                                </h4>
                                <ul
                                    class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-8"
                                >
                                    <li>Laporan kinerja periodik</li>
                                    <li>Capaian target dan indikator</li>
                                    <li>Evaluasi program dan kegiatan</li>
                                </ul>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        5
                                    </div>
                                    Informasi Tentang Pengaduan
                                </h4>
                                <ul
                                    class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-8"
                                >
                                    <li>Tata cara pengaduan masyarakat</li>
                                    <li>Saluran pengaduan yang tersedia</li>
                                    <li>Waktu penyelesaian pengaduan</li>
                                </ul>
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
                                Cara Mengakses
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Informasi setiap saat dapat diakses melalui website resmi atau dengan mengajukan
                                permohonan langsung ke PPID. Sebagian besar informasi tersedia dalam format digital dan
                                dapat diunduh secara gratis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
