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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Formulir Permohonan</h1>
            <p class="text-xl text-gray-300">Formulir Permohonan Informasi Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Formulir Permohonan"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "formulir-permohonan", "openLayanan" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                                Formulir Permohonan Informasi Publik
                            </h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-8">
                            Silakan unduh formulir permohonan informasi publik di bawah ini, lengkapi dengan data yang
                            benar, dan kirimkan kepada PPID melalui cara yang telah ditentukan.
                        </p>

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
                                            Formulir_Permohonan_Informasi.pdf
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">250 KB</p>
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
                                            Formulir_Permohonan_Informasi.docx
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">180 KB</p>
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

                        <!-- Petunjuk Pengisian -->
                        <div class="mb-8 p-6 bg-blue-50 dark:bg-blue-900/20 rounded-xl border-l-4 border-blue-500">
                            <h3 class="text-lg font-bold text-blue-700 dark:text-blue-400 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                                Petunjuk Pengisian
                            </h3>
                            <ol class="list-decimal list-inside space-y-2 text-sm text-blue-600 dark:text-blue-300">
                                <li>Isi formulir dengan lengkap dan jelas menggunakan huruf kapital atau diketik</li>
                                <li>Cantumkan identitas pemohon secara lengkap dan benar</li>
                                <li>Jelaskan secara rinci informasi yang dimohonkan</li>
                                <li>Sebutkan tujuan penggunaan informasi</li>
                                <li>
                                    Pilih cara memperoleh salinan informasi (fotokopi, softcopy, atau melihat langsung)
                                </li>
                                <li>Lampirkan fotokopi identitas (KTP/SIM/Paspor)</li>
                                <li>Bubuhkan tanda tangan dan tanggal pengajuan</li>
                            </ol>
                        </div>

                        <!-- Cara Penyampaian -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">
                                Cara Penyampaian Formulir
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
                                        Datang langsung ke Kantor PPID OBU Wilayah XII - Bandung pada jam kerja
                                    </p>
                                </div>

                                <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-green-500">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div
                                            class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center"
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
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-gray-800 dark:text-white">Email</h4>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Kirim formulir yang telah diisi dan dokumen pendukung ke:
                                        <br />
                                        <strong>ppid@obu12.dephub.go.id</strong>
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
                                        Kirim melalui pos atau kurir ke alamat kantor PPID
                                    </p>
                                </div>

                                <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl border-l-4 border-purple-500">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div
                                            class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center"
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
                                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-gray-800 dark:text-white">Faksimili</h4>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Kirim via fax ke nomor: (022) XXXX-XXXX
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
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Permohonan informasi akan diproses dalam waktu
                                <strong>10 hari kerja</strong>
                                sejak formulir diterima lengkap. Anda akan menerima tanda bukti penerimaan permohonan
                                yang dapat digunakan untuk melacak status permohonan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
