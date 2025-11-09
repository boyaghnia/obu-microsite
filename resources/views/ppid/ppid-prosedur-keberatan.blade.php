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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Prosedur Keberatan</h1>
            <p class="text-xl text-gray-300">Tata Cara Mengajukan Keberatan Informasi Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Prosedur Keberatan"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "prosedur-keberatan", "openLayanan" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                                Prosedur Permohonan Keberatan Informasi Publik
                            </h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-6">
                            Pemohon informasi dapat mengajukan keberatan apabila merasa tidak puas terhadap tanggapan
                            atas permohonan informasi atau telah melewati waktu yang ditentukan tetapi belum ada
                            tanggapan.
                        </p>

                        <div
                            class="mb-8 p-6 bg-orange-50 dark:bg-orange-900/20 rounded-xl border-l-4 border-orange-500"
                        >
                            <h3 class="text-lg font-bold text-orange-700 dark:text-orange-400 mb-3">
                                Alasan Pengajuan Keberatan
                            </h3>
                            <ul class="space-y-2 text-sm text-orange-600 dark:text-orange-300">
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Permohonan informasi ditolak tanpa alasan yang jelas</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Informasi yang diberikan tidak sesuai dengan yang diminta</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Biaya yang dikenakan tidak wajar</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Jangka waktu pemberian informasi telah terlampaui</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Informasi yang diberikan tidak lengkap</span>
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg"
                                    >
                                        1
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                                        Waktu Pengajuan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Keberatan dapat diajukan paling lambat
                                        <strong class="text-yellow-600">30 (tiga puluh) hari kerja</strong>
                                        setelah pemohon menerima tanggapan tertulis atau setelah melewati waktu yang
                                        ditentukan.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg"
                                    >
                                        2
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                                        Mengisi Formulir Keberatan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Pemohon mengisi formulir keberatan dengan melampirkan dokumen pendukung:
                                    </p>
                                    <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <ul
                                            class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-2"
                                        >
                                            <li>Fotokopi identitas pemohon (KTP/SIM/Paspor)</li>
                                            <li>Surat tanda bukti permohonan informasi</li>
                                            <li>Surat tanggapan PPID (jika ada)</li>
                                            <li>Alasan keberatan secara tertulis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg"
                                    >
                                        3
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                                        Penyampaian Keberatan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Keberatan disampaikan kepada Atasan PPID melalui:
                                    </p>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                                            <p class="font-semibold text-blue-700 dark:text-blue-400 mb-1">Langsung</p>
                                            <p class="text-sm text-blue-600 dark:text-blue-300">Ke kantor PPID</p>
                                        </div>
                                        <div class="p-4 bg-green-50 dark:bg-green-900/20 rounded-lg">
                                            <p class="font-semibold text-green-700 dark:text-green-400 mb-1">Surat</p>
                                            <p class="text-sm text-green-600 dark:text-green-300">Pos atau kurir</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg"
                                    >
                                        4
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                                        Pemrosesan Keberatan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Atasan PPID akan memberikan tanggapan atas keberatan dalam jangka waktu:
                                    </p>
                                    <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <strong class="text-yellow-600">30 (tiga puluh) hari kerja</strong>
                                            sejak diterimanya keberatan untuk memberikan tanggapan tertulis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div
                                        class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg"
                                    >
                                        5
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">
                                        Keputusan Keberatan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Atasan PPID dapat memberikan keputusan:
                                    </p>
                                    <div class="space-y-2">
                                        <div
                                            class="p-4 bg-green-50 dark:bg-green-900/20 rounded-lg border-l-4 border-green-500"
                                        >
                                            <p class="font-semibold text-green-700 dark:text-green-400">
                                                Menerima Keberatan
                                            </p>
                                            <p class="text-sm text-green-600 dark:text-green-300">
                                                Informasi akan diberikan sesuai permintaan
                                            </p>
                                        </div>
                                        <div
                                            class="p-4 bg-red-50 dark:bg-red-900/20 rounded-lg border-l-4 border-red-500"
                                        >
                                            <p class="font-semibold text-red-700 dark:text-red-400">
                                                Menolak Keberatan
                                            </p>
                                            <p class="text-sm text-red-600 dark:text-red-300">
                                                Disertai alasan penolakan yang jelas
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
                                Langkah Selanjutnya
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Jika pemohon tidak puas dengan keputusan keberatan, dapat mengajukan penyelesaian
                                sengketa informasi publik ke Komisi Informasi dalam waktu 14 (empat belas) hari kerja
                                sejak menerima keputusan keberatan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
