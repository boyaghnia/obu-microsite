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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Maklumat Pelayanan</h1>
            <p class="text-xl text-gray-300">Komitmen Layanan Informasi Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Maklumat Pelayanan"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "maklumat-pelayanan", "openLayanan" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Maklumat Pelayanan</h2>
                        </div>

                        <div
                            class="mb-8 p-8 bg-linear-to-br from-yellow-50 to-orange-50 dark:from-gray-700 dark:to-gray-600 rounded-2xl border-2 border-yellow-500"
                        >
                            <h3 class="text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">
                                MAKLUMAT PELAYANAN INFORMASI PUBLIK
                            </h3>
                            <p class="text-center text-gray-700 dark:text-gray-300 mb-6 italic">
                                Kantor Otoritas Bandar Udara Wilayah XII - Bandung
                            </p>

                            <div
                                class="space-y-4 text-sm text-gray-700 dark:text-gray-300 text-justify leading-relaxed"
                            >
                                <p>
                                    Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan informasi publik
                                    dengan sebaik-baiknya sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang
                                    Keterbukaan Informasi Publik dan peraturan pelaksanaannya.
                                </p>

                                <p>Kami berkomitmen untuk:</p>

                                <ol class="list-decimal list-inside space-y-2 ml-4">
                                    <li>
                                        Memberikan pelayanan informasi publik yang berkualitas sesuai dengan asas
                                        pelayanan informasi publik
                                    </li>
                                    <li>
                                        Menyediakan dan memberikan informasi publik yang benar, jelas, dan tidak
                                        menyesatkan
                                    </li>
                                    <li>
                                        Membangun dan mengembangkan sistem informasi dan dokumentasi untuk mengelola
                                        informasi publik secara baik dan efisien
                                    </li>
                                    <li>
                                        Menyediakan akses informasi publik secara cepat, tepat waktu, biaya ringan, dan
                                        cara sederhana
                                    </li>
                                    <li>
                                        Memelihara dan memperbaharui informasi yang wajib tersedia dan diumumkan secara
                                        berkala
                                    </li>
                                    <li>Menunjuk Pejabat Pengelola Informasi dan Dokumentasi (PPID) yang kompeten</li>
                                    <li>Menyediakan sarana dan prasarana layanan informasi publik yang memadai</li>
                                </ol>

                                <p class="mt-6">
                                    Apabila kami tidak memberikan pelayanan sesuai dengan standar pelayanan yang telah
                                    ditetapkan, kami siap menerima sanksi sesuai dengan peraturan perundang-undangan
                                    yang berlaku.
                                </p>
                            </div>

                            <div class="mt-8 text-center">
                                <p class="text-sm text-gray-600 dark:text-gray-400">Bandung, [Tanggal]</p>
                                <p class="text-sm font-bold text-gray-800 dark:text-white mt-8">[Nama Pejabat]</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">[Jabatan]</p>
                            </div>
                        </div>

                        <div class="mt-8 grid md:grid-cols-3 gap-4">
                            <div
                                class="p-6 bg-blue-50 dark:bg-blue-900/20 rounded-xl text-center border-2 border-blue-200 dark:border-blue-800"
                            >
                                <div
                                    class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3"
                                >
                                    <svg
                                        class="w-6 h-6 text-white"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-blue-700 dark:text-blue-400 mb-2">Transparan</h4>
                                <p class="text-sm text-blue-600 dark:text-blue-300">
                                    Memberikan informasi yang jelas dan terbuka
                                </p>
                            </div>

                            <div
                                class="p-6 bg-green-50 dark:bg-green-900/20 rounded-xl text-center border-2 border-green-200 dark:border-green-800"
                            >
                                <div
                                    class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3"
                                >
                                    <svg
                                        class="w-6 h-6 text-white"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"
                                        ></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-green-700 dark:text-green-400 mb-2">Cepat</h4>
                                <p class="text-sm text-green-600 dark:text-green-300">
                                    Pelayanan yang efisien dan tepat waktu
                                </p>
                            </div>

                            <div
                                class="p-6 bg-purple-50 dark:bg-purple-900/20 rounded-xl text-center border-2 border-purple-200 dark:border-purple-800"
                            >
                                <div
                                    class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-3"
                                >
                                    <svg
                                        class="w-6 h-6 text-white"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-purple-700 dark:text-purple-400 mb-2">Terjangkau</h4>
                                <p class="text-sm text-purple-600 dark:text-purple-300">Biaya pelayanan yang ringan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
