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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Laporan Layanan</h1>
            <p class="text-xl text-gray-300">Statistik Layanan Informasi Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Laporan Layanan"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "laporan-layanan", "openLayanan" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                                Laporan Layanan Informasi Publik
                            </h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-8">
                            Laporan layanan informasi publik merupakan bentuk transparansi dan akuntabilitas PPID dalam
                            memberikan pelayanan informasi kepada masyarakat. Berikut adalah statistik layanan informasi
                            publik:
                        </p>

                        <!-- Statistik Ringkasan -->
                        <div class="grid md:grid-cols-4 gap-4 mb-8">
                            <div
                                class="p-6 bg-blue-50 dark:bg-blue-900/20 rounded-xl text-center border-2 border-blue-200 dark:border-blue-800"
                            >
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">150</div>
                                <p class="text-sm text-blue-700 dark:text-blue-300">Total Permohonan</p>
                            </div>
                            <div
                                class="p-6 bg-green-50 dark:bg-green-900/20 rounded-xl text-center border-2 border-green-200 dark:border-green-800"
                            >
                                <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">135</div>
                                <p class="text-sm text-green-700 dark:text-green-300">Dikabulkan</p>
                            </div>
                            <div
                                class="p-6 bg-red-50 dark:bg-red-900/20 rounded-xl text-center border-2 border-red-200 dark:border-red-800"
                            >
                                <div class="text-3xl font-bold text-red-600 dark:text-red-400 mb-2">10</div>
                                <p class="text-sm text-red-700 dark:text-red-300">Ditolak</p>
                            </div>
                            <div
                                class="p-6 bg-yellow-50 dark:bg-yellow-900/20 rounded-xl text-center border-2 border-yellow-200 dark:border-yellow-800"
                            >
                                <div class="text-3xl font-bold text-yellow-600 dark:text-yellow-400 mb-2">5</div>
                                <p class="text-sm text-yellow-700 dark:text-yellow-300">Dalam Proses</p>
                            </div>
                        </div>

                        <!-- Tabel Laporan Tahunan -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Laporan Tahunan</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-300">Tahun</th>
                                            <th class="px-4 py-3 text-center text-gray-700 dark:text-gray-300">
                                                Permohonan
                                            </th>
                                            <th class="px-4 py-3 text-center text-gray-700 dark:text-gray-300">
                                                Dikabulkan
                                            </th>
                                            <th class="px-4 py-3 text-center text-gray-700 dark:text-gray-300">
                                                Ditolak
                                            </th>
                                            <th class="px-4 py-3 text-center text-gray-700 dark:text-gray-300">
                                                Keberatan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3 text-gray-800 dark:text-gray-300">2024</td>
                                            <td class="px-4 py-3 text-center text-gray-600 dark:text-gray-400">150</td>
                                            <td class="px-4 py-3 text-center text-green-600 dark:text-green-400">
                                                135
                                            </td>
                                            <td class="px-4 py-3 text-center text-red-600 dark:text-red-400">10</td>
                                            <td class="px-4 py-3 text-center text-orange-600 dark:text-orange-400">
                                                5
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3 text-gray-800 dark:text-gray-300">2023</td>
                                            <td class="px-4 py-3 text-center text-gray-600 dark:text-gray-400">120</td>
                                            <td class="px-4 py-3 text-center text-green-600 dark:text-green-400">
                                                110
                                            </td>
                                            <td class="px-4 py-3 text-center text-red-600 dark:text-red-400">8</td>
                                            <td class="px-4 py-3 text-center text-orange-600 dark:text-orange-400">
                                                2
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3 text-gray-800 dark:text-gray-300">2022</td>
                                            <td class="px-4 py-3 text-center text-gray-600 dark:text-gray-400">95</td>
                                            <td class="px-4 py-3 text-center text-green-600 dark:text-green-400">88</td>
                                            <td class="px-4 py-3 text-center text-red-600 dark:text-red-400">5</td>
                                            <td class="px-4 py-3 text-center text-orange-600 dark:text-orange-400">
                                                2
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Kategori Informasi yang Diminta -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">
                                Kategori Informasi yang Paling Banyak Diminta
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center gap-3">
                                    <div class="flex-1 bg-gray-200 dark:bg-gray-700 rounded-full h-8 overflow-hidden">
                                        <div class="bg-blue-500 h-full flex items-center px-4" style="width: 40%">
                                            <span class="text-white text-xs font-semibold">40%</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 w-48">
                                        Regulasi & Kebijakan
                                    </span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex-1 bg-gray-200 dark:bg-gray-700 rounded-full h-8 overflow-hidden">
                                        <div class="bg-green-500 h-full flex items-center px-4" style="width: 30%">
                                            <span class="text-white text-xs font-semibold">30%</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 w-48">Data Operasional</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex-1 bg-gray-200 dark:bg-gray-700 rounded-full h-8 overflow-hidden">
                                        <div class="bg-yellow-500 h-full flex items-center px-4" style="width: 20%">
                                            <span class="text-white text-xs font-semibold">20%</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 w-48">Laporan Keuangan</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex-1 bg-gray-200 dark:bg-gray-700 rounded-full h-8 overflow-hidden">
                                        <div class="bg-purple-500 h-full flex items-center px-4" style="width: 10%">
                                            <span class="text-white text-xs font-semibold">10%</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 w-48">Lainnya</span>
                                </div>
                            </div>
                        </div>

                        <!-- Download Laporan -->
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
                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                    ></path>
                                </svg>
                                Download Laporan Lengkap
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">
                                Laporan lengkap layanan informasi publik tersedia dalam format PDF dan dapat diunduh di
                                bawah ini:
                            </p>
                            <div class="space-y-2">
                                <a
                                    href="#"
                                    class="flex items-center gap-3 p-3 bg-white dark:bg-gray-600 rounded-lg hover:shadow-md transition-shadow"
                                >
                                    <svg class="w-8 h-8 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                        ></path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-800 dark:text-white">
                                            Laporan Layanan Informasi 2024
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">PDF • 2.5 MB</p>
                                    </div>
                                    <svg
                                        class="w-5 h-5 text-gray-400"
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
                                    class="flex items-center gap-3 p-3 bg-white dark:bg-gray-600 rounded-lg hover:shadow-md transition-shadow"
                                >
                                    <svg class="w-8 h-8 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                        ></path>
                                    </svg>
                                    <div class="flex-1">
                                        <p class="font-semibold text-gray-800 dark:text-white">
                                            Laporan Layanan Informasi 2023
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">PDF • 2.2 MB</p>
                                    </div>
                                    <svg
                                        class="w-5 h-5 text-gray-400"
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
