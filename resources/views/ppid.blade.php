@extends("app")

@section("content")
    <!-- Hero Section -->
    <section class="relative bg-gray-900 h-96 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="PPID Hero"
                class="w-full h-full object-cover opacity-30"
            />
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-linear-to-b from-gray-900/50 to-gray-900/90"></div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">PPID</h1>
            <p class="text-xl text-gray-300 mb-2">Pejabat Pengelola Informasi dan Dokumentasi</p>
            <p class="text-lg text-gray-400">Kantor Otoritas Bandar Udara Wilayah XII - Bandung</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    @include(
        "section-breadcrumb",
        [
            "breadcrumbs" => [["label" => "PPID"]],
        ]
    )

    <!-- Main Content -->
    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Introduction -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">
                    Selamat Datang di Portal PPID
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Portal informasi dan dokumentasi publik untuk memenuhi hak masyarakat dalam memperoleh informasi
                    sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.
                </p>
            </div>

            <!-- PPID Section -->
            <div class="mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-1 h-10 bg-blue-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">PPID</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Profil -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-600 dark:text-blue-400 group-hover:text-white"
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
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-blue-600"
                                >
                                    Profil
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi profil PPID Kantor OBU Wilayah XII
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Tugas dan Fungsi -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-600 dark:text-blue-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-blue-600"
                                >
                                    Tugas dan Fungsi
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tugas dan fungsi PPID dalam pelayanan informasi
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Visi dan Misi -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-600 dark:text-blue-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    ></path>
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-blue-600"
                                >
                                    Visi dan Misi
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Visi dan misi PPID dalam melayani publik
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Regulasi -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-600 dark:text-blue-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-blue-600"
                                >
                                    Regulasi
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Peraturan dan regulasi terkait keterbukaan informasi
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Kontak -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-600 dark:text-blue-400 group-hover:text-white"
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
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-blue-600"
                                >
                                    Kontak
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Informasi kontak dan alamat PPID</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Informasi Publik Section -->
            <div class="mb-16">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-1 h-10 bg-green-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">Informasi Publik</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Informasi Berkala -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center group-hover:bg-green-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-green-600 dark:text-green-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-green-600"
                                >
                                    Informasi Berkala
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi yang wajib disediakan dan diumumkan secara berkala
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Informasi Serta Merta -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center group-hover:bg-green-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-green-600 dark:text-green-400 group-hover:text-white"
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
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-green-600"
                                >
                                    Informasi Serta Merta
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi yang dapat mengancam hajat hidup orang banyak
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Informasi Setiap Saat -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center group-hover:bg-green-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-green-600 dark:text-green-400 group-hover:text-white"
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
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-green-600"
                                >
                                    Informasi Setiap Saat
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi yang wajib tersedia setiap saat
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Informasi Dikecualikan -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-green-500 dark:hover:border-green-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center group-hover:bg-green-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-green-600 dark:text-green-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-green-600"
                                >
                                    Informasi Dikecualikan
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Daftar informasi yang dikecualikan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Layanan Informasi Section -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-1 h-10 bg-yellow-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">Layanan Informasi</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Maklumat Pelayanan -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-yellow-500 dark:hover:border-yellow-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center group-hover:bg-yellow-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-yellow-600 dark:text-yellow-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-yellow-600"
                                >
                                    Maklumat Pelayanan
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Maklumat pelayanan informasi publik
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Prosedur Permohonan Informasi Publik -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-yellow-500 dark:hover:border-yellow-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center group-hover:bg-yellow-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-yellow-600 dark:text-yellow-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-yellow-600"
                                >
                                    Prosedur Permohonan Informasi Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tata cara mengajukan permohonan informasi
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Prosedur Permohonan Keberatan Informasi Publik -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-yellow-500 dark:hover:border-yellow-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center group-hover:bg-yellow-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-yellow-600 dark:text-yellow-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-yellow-600"
                                >
                                    Prosedur Permohonan Keberatan Informasi Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tata cara mengajukan keberatan informasi
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Prosedur Pengajuan Sengketa Informasi Publik -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-yellow-500 dark:hover:border-yellow-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center group-hover:bg-yellow-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-yellow-600 dark:text-yellow-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-yellow-600"
                                >
                                    Prosedur Pengajuan Sengketa Informasi Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tata cara pengajuan sengketa informasi
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Laporan Layanan Informasi Publik -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-yellow-500 dark:hover:border-yellow-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center group-hover:bg-yellow-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-yellow-600 dark:text-yellow-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-yellow-600"
                                >
                                    Laporan Layanan Informasi Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Laporan berkala layanan informasi publik
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Formulir Permohonan Informasi Publik -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-yellow-500 dark:hover:border-yellow-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center group-hover:bg-yellow-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-yellow-600 dark:text-yellow-400 group-hover:text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-yellow-600"
                                >
                                    Formulir Permohonan Informasi Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Unduh formulir permohonan informasi
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Formulir Permohonan Keberatan Informasi Publik -->
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 dark:border-gray-700 hover:border-yellow-500 dark:hover:border-yellow-500 h-full min-h-40"
                    >
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center group-hover:bg-yellow-600 transition-colors"
                            >
                                <svg
                                    class="w-6 h-6 text-yellow-600 dark:text-yellow-400 group-hover:text-white"
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
                            <div>
                                <h4
                                    class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-yellow-600"
                                >
                                    Formulir Permohonan Keberatan Informasi Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Unduh formulir permohonan keberatan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
