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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Informasi Dikecualikan</h1>
            <p class="text-xl text-gray-300">Informasi yang Tidak Dapat Diakses Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Informasi Dikecualikan"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "informasi-dikecualikan", "openInformasi" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Informasi Dikecualikan</h2>
                        </div>

                        <div class="mb-8 p-6 bg-red-50 dark:bg-red-900/20 rounded-xl border-l-4 border-red-500">
                            <h3 class="text-lg font-bold text-red-700 dark:text-red-400 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                    ></path>
                                </svg>
                                Informasi yang Dikecualikan
                            </h3>
                            <p class="text-sm text-red-600 dark:text-red-300 leading-relaxed">
                                Sesuai dengan UU No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik, terdapat
                                informasi yang dikecualikan dari akses publik untuk melindungi kepentingan yang lebih
                                besar.
                            </p>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-6">
                            Informasi Dikecualikan adalah informasi yang tidak dapat diakses oleh publik karena sifatnya
                            yang rahasia sesuai dengan Undang-Undang, kepatutan, dan/atau kepentingan umum. Berikut
                            adalah kategori informasi yang dikecualikan:
                        </p>

                        <div class="space-y-4">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-gray-400">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        1
                                    </div>
                                    Informasi yang Membahayakan Pertahanan dan Keamanan Negara
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi yang dapat membahayakan pertahanan dan keamanan negara, termasuk dokumen
                                    strategi militer dan keamanan nasional.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-gray-400">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        2
                                    </div>
                                    Informasi yang Berkaitan dengan Perlindungan Hak Kekayaan Intelektual
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi yang pengungkapannya dapat merugikan perlindungan hak kekayaan intelektual
                                    dan persaingan usaha tidak sehat.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-gray-400">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        3
                                    </div>
                                    Informasi yang Membahayakan Keselamatan dan Kesehatan Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi yang dapat membahayakan keselamatan dan kesehatan publik jika dibuka untuk
                                    umum.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-gray-400">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        4
                                    </div>
                                    Informasi yang Berkaitan dengan Penegakan Hukum
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi tentang proses penegakan hukum yang sedang berlangsung dan dapat
                                    menghambat proses peradilan yang adil.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-gray-400">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        5
                                    </div>
                                    Informasi Pribadi
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi yang berkaitan dengan riwayat dan kondisi anggota keluarga, riwayat
                                    kesehatan, dan data pribadi lainnya.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-gray-400">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                    <div
                                        class="w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center text-white text-sm"
                                    >
                                        6
                                    </div>
                                    Memorandum atau Surat yang Bersifat Rahasia
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Memorandum atau surat-surat antar atau intra Badan Publik yang menurut sifatnya
                                    dirahasiakan.
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
                                Catatan Penting
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Pengecualian informasi dilakukan melalui uji konsekuensi yang ketat sesuai dengan
                                peraturan perundang-undangan. Jika Anda merasa perlu mengakses informasi yang
                                dikecualikan, Anda dapat mengajukan keberatan sesuai prosedur yang berlaku.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
