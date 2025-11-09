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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Prosedur Permohonan Informasi</h1>
            <p class="text-xl text-gray-300">Tata Cara Mengajukan Permohonan Informasi Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Prosedur Permohonan Informasi"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "prosedur-permohonan-informasi", "openLayanan" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                                Prosedur Permohonan Informasi Publik
                            </h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-8">
                            Berikut adalah tata cara mengajukan permohonan informasi publik di Kantor OBU Wilayah XII -
                            Bandung:
                        </p>

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
                                        Mengisi Formulir Permohonan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Pemohon mengisi formulir permohonan informasi publik dengan lengkap dan jelas.
                                        Formulir dapat diunduh melalui website atau diambil langsung di kantor PPID.
                                    </p>
                                    <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold mb-2">
                                            Informasi yang harus dicantumkan:
                                        </p>
                                        <ul
                                            class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-2"
                                        >
                                            <li>Identitas pemohon (nama, alamat, nomor telepon)</li>
                                            <li>Rincian informasi yang dimohonkan</li>
                                            <li>Tujuan penggunaan informasi</li>
                                            <li>Cara memperoleh dan mendapatkan salinan informasi</li>
                                        </ul>
                                    </div>
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
                                        Menyampaikan Permohonan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Formulir yang telah diisi dapat disampaikan melalui beberapa cara:
                                    </p>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div
                                            class="p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg border-l-4 border-blue-500"
                                        >
                                            <p class="font-semibold text-blue-700 dark:text-blue-400 mb-1">Langsung</p>
                                            <p class="text-sm text-blue-600 dark:text-blue-300">
                                                Datang ke kantor PPID
                                            </p>
                                        </div>
                                        <div
                                            class="p-4 bg-green-50 dark:bg-green-900/20 rounded-lg border-l-4 border-green-500"
                                        >
                                            <p class="font-semibold text-green-700 dark:text-green-400 mb-1">Email</p>
                                            <p class="text-sm text-green-600 dark:text-green-300">
                                                ppid@obu12.dephub.go.id
                                            </p>
                                        </div>
                                        <div
                                            class="p-4 bg-purple-50 dark:bg-purple-900/20 rounded-lg border-l-4 border-purple-500"
                                        >
                                            <p class="font-semibold text-purple-700 dark:text-purple-400 mb-1">Pos</p>
                                            <p class="text-sm text-purple-600 dark:text-purple-300">
                                                Kirim ke alamat kantor
                                            </p>
                                        </div>
                                        <div
                                            class="p-4 bg-orange-50 dark:bg-orange-900/20 rounded-lg border-l-4 border-orange-500"
                                        >
                                            <p class="font-semibold text-orange-700 dark:text-orange-400 mb-1">
                                                Faksimili
                                            </p>
                                            <p class="text-sm text-orange-600 dark:text-orange-300">Nomor fax kantor</p>
                                        </div>
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
                                        Registrasi Permohonan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        PPID akan mencatat dan meregister permohonan informasi yang masuk. Pemohon akan
                                        menerima tanda bukti penerimaan permohonan yang memuat nomor registrasi, tanggal
                                        penerimaan, dan identitas petugas.
                                    </p>
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
                                        Pemrosesan Permohonan
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        PPID akan memproses permohonan dengan jangka waktu:
                                    </p>
                                    <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                            <li class="flex items-start gap-2">
                                                <span class="text-yellow-500 mt-1">⏱</span>
                                                <span>
                                                    <strong>10 hari kerja</strong>
                                                    sejak diterimanya permohonan untuk memberikan tanggapan
                                                </span>
                                            </li>
                                            <li class="flex items-start gap-2">
                                                <span class="text-yellow-500 mt-1">⏱</span>
                                                <span>
                                                    Dapat diperpanjang
                                                    <strong>7 hari kerja</strong>
                                                    dengan pemberitahuan tertulis
                                                </span>
                                            </li>
                                        </ul>
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
                                        Penyampaian Informasi
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Informasi yang diminta akan diberikan kepada pemohon sesuai dengan cara
                                        penyampaian yang dipilih. Jika permohonan ditolak, PPID akan memberikan
                                        pemberitahuan tertulis disertai alasan penolakan.
                                    </p>
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
                                Catatan Penting
                            </h3>
                            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 mt-1">•</span>
                                    <span>
                                        Permohonan informasi diajukan secara tertulis dan mencantumkan identitas lengkap
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 mt-1">•</span>
                                    <span>Pemohon dapat melacak status permohonan melalui nomor registrasi</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 mt-1">•</span>
                                    <span>Jika permohonan ditolak, pemohon dapat mengajukan keberatan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
