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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Formulir Keberatan</h1>
            <p class="text-xl text-gray-300">Formulir Permohonan Keberatan Informasi Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Formulir Keberatan"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "formulir-keberatan", "openLayanan" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                                Formulir Permohonan Keberatan Informasi Publik
                            </h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-8">
                            Formulir ini digunakan untuk mengajukan keberatan atas tanggapan permohonan informasi publik
                            yang tidak memuaskan atau tidak sesuai dengan yang diharapkan.
                        </p>

                        <!-- Informasi Penting -->
                        <div
                            class="mb-8 p-6 bg-orange-50 dark:bg-orange-900/20 rounded-xl border-l-4 border-orange-500"
                        >
                            <h3
                                class="text-lg font-bold text-orange-700 dark:text-orange-400 mb-3 flex items-center gap-2"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                                    ></path>
                                </svg>
                                Syarat Pengajuan Keberatan
                            </h3>
                            <ul class="space-y-2 text-sm text-orange-600 dark:text-orange-300">
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Telah mengajukan permohonan informasi sebelumnya</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>
                                        Diajukan paling lambat 30 hari kerja sejak menerima tanggapan atau melewati
                                        batas waktu
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Melampirkan bukti tanda terima permohonan informasi</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Download Formulir -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Unduh Formulir</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <a
                                    href="#"
                                    class="flex items-center gap-4 p-6 bg-linear-to-br from-red-50 to-orange-50 dark:from-gray-700 dark:to-gray-600 rounded-xl hover:shadow-lg transition-all border-2 border-red-200 dark:border-red-800"
                                >
                                    <svg class="w-12 h-12 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                        ></path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="font-bold text-gray-800 dark:text-white mb-1">Format PDF</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Formulir_Keberatan_Informasi.pdf
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">280 KB</p>
                                    </div>
                                    <svg
                                        class="w-6 h-6 text-red-500"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                                        ></path>
                                    </svg>
                                </a>

                                <a
                                    href="#"
                                    class="flex items-center gap-4 p-6 bg-linear-to-br from-blue-50 to-cyan-50 dark:from-gray-700 dark:to-gray-600 rounded-xl hover:shadow-lg transition-all border-2 border-blue-200 dark:border-blue-800"
                                >
                                    <svg class="w-12 h-12 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                        ></path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="font-bold text-gray-800 dark:text-white mb-1">Format Word</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Formulir_Keberatan_Informasi.docx
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">200 KB</p>
                                    </div>
                                    <svg
                                        class="w-6 h-6 text-blue-500"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                                        ></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Dokumen yang Harus Dilampirkan -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">
                                Dokumen yang Harus Dilampirkan
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm shrink-0 mt-0.5"
                                    >
                                        1
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800 dark:text-white">Fotokopi Identitas</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            KTP/SIM/Paspor yang masih berlaku
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm shrink-0 mt-0.5"
                                    >
                                        2
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800 dark:text-white">
                                            Bukti Permohonan Informasi
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Tanda bukti penerimaan permohonan informasi dari PPID
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm shrink-0 mt-0.5"
                                    >
                                        3
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800 dark:text-white">Surat Tanggapan PPID</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Surat tanggapan atas permohonan informasi (jika ada)
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div
                                        class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center text-white text-sm shrink-0 mt-0.5"
                                    >
                                        4
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800 dark:text-white">Alasan Keberatan</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Uraian lengkap mengenai alasan pengajuan keberatan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cara Pengajuan -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">
                                Cara Pengajuan Keberatan
                            </h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div
                                            class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center"
                                        >
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
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-gray-800 dark:text-white">Langsung</h4>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Serahkan langsung kepada Atasan PPID di Kantor OBU Wilayah XII - Bandung
                                    </p>
                                </div>

                                <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-blue-500">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div
                                            class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center"
                                        >
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
                                        <h4 class="font-bold text-gray-800 dark:text-white">Pos/Kurir</h4>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Kirim melalui pos atau kurir dengan alamat yang dituju kepada Atasan PPID
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-yellow-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
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
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                                Waktu Proses
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed mb-2">
                                Atasan PPID akan memberikan tanggapan atas keberatan dalam waktu
                                <strong>30 hari kerja</strong>
                                sejak keberatan diterima lengkap.
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Jika tidak puas dengan keputusan keberatan, Anda dapat mengajukan penyelesaian sengketa
                                ke Komisi Informasi dalam waktu
                                <strong>14 hari kerja</strong>
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
