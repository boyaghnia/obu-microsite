@extends("app")

@section("content")
    <!-- Hero Section -->
    <section class="relative bg-gray-900 h-96 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1517400508447-f8dd518b86db?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="Hero"
                class="w-full h-full object-cover opacity-30"
            />
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-linear-to-b from-gray-900/50 to-gray-900/90"></div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Profil PPID</h1>
            <p class="text-xl text-gray-300">Pejabat Pengelola Informasi dan Dokumentasi</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    @include(
        "section-breadcrumb",
        [
            "breadcrumbs" => [["label" => "PPID"], ["label" => "Profil"]],
        ]
    )

    <!-- Main Content -->
    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Content Grid with Sidebar -->
            <div class="grid lg:grid-cols-4 gap-6">
                <!-- Sidebar Navigation -->
                <aside class="lg:col-span-1">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg sticky top-24">
                        <nav class="space-y-2" x-data="{ openPpid: true, openInformasi: false, openLayanan: false }">
                            <!-- PPID Section -->
                            <div class="border-b border-gray-200 dark:border-gray-700 pb-2">
                                <button
                                    @click="openPpid = !openPpid"
                                    class="w-full flex items-center justify-between px-4 py-3 text-left font-bold text-gray-800 dark:text-white hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors"
                                >
                                    <span>PPID</span>
                                    <div
                                        class="flex items-center justify-center w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-700 transition-transform duration-200"
                                        :class="{ 'rotate-90': openPpid }"
                                    >
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M9 5l7 7-7 7"
                                            ></path>
                                        </svg>
                                    </div>
                                </button>
                                <div x-show="openPpid" x-collapse class="mt-2 space-y-1">
                                    <a
                                        href="/ppid/profil"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Profil
                                    </a>
                                    <a
                                        href="/ppid/tugas-fungsi"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Tugas dan Fungsi
                                    </a>
                                    <a
                                        href="/ppid/visi-misi"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Visi dan Misi
                                    </a>
                                    <a
                                        href="/ppid/regulasi"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Regulasi
                                    </a>
                                    <a
                                        href="/ppid/kontak"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Kontak
                                    </a>
                                </div>
                            </div>

                            <!-- Informasi Publik Section -->
                            <div class="border-b border-gray-200 dark:border-gray-700 pb-2">
                                <button
                                    @click="openInformasi = !openInformasi"
                                    class="w-full flex items-center justify-between px-4 py-3 text-left font-bold text-gray-800 dark:text-white hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors"
                                >
                                    <span>Informasi Publik</span>
                                    <div
                                        class="flex items-center justify-center w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-700 transition-transform duration-200"
                                        :class="{ 'rotate-90': openInformasi }"
                                    >
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M9 5l7 7-7 7"
                                            ></path>
                                        </svg>
                                    </div>
                                </button>
                                <div x-show="openInformasi" x-collapse class="mt-2 space-y-1">
                                    <a
                                        href="/ppid/informasi-berkala"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Informasi Berkala
                                    </a>
                                    <a
                                        href="/ppid/informasi-serta-merta"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Informasi Serta Merta
                                    </a>
                                    <a
                                        href="/ppid/informasi-setiap-saat"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Informasi Setiap Saat
                                    </a>
                                    <a
                                        href="/ppid/informasi-dikecualikan"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Informasi Dikecualikan
                                    </a>
                                </div>
                            </div>

                            <!-- Layanan Informasi Section -->
                            <div class="pb-2">
                                <button
                                    @click="openLayanan = !openLayanan"
                                    class="w-full flex items-center justify-between px-4 py-3 text-left font-bold text-gray-800 dark:text-white hover:text-yellow-600 dark:hover:text-yellow-500 transition-colors"
                                >
                                    <span>Layanan Informasi</span>
                                    <div
                                        class="flex items-center justify-center w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-700 transition-transform duration-200"
                                        :class="{ 'rotate-90': openLayanan }"
                                    >
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M9 5l7 7-7 7"
                                            ></path>
                                        </svg>
                                    </div>
                                </button>
                                <div x-show="openLayanan" x-collapse class="mt-2 space-y-1">
                                    <a
                                        href="/ppid/maklumat-pelayanan"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Maklumat Pelayanan
                                    </a>
                                    <a
                                        href="/ppid/prosedur-permohonan-informasi"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Prosedur Permohonan Informasi Publik
                                    </a>
                                    <a
                                        href="/ppid/prosedur-keberatan"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Prosedur Permohonan Keberatan Informasi Publik
                                    </a>
                                    <a
                                        href="/ppid/prosedur-sengketa"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Prosedur Pengajuan Sengketa Informasi Publik
                                    </a>
                                    <a
                                        href="/ppid/laporan-layanan"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Laporan Layanan Informasi Publik
                                    </a>
                                    <a
                                        href="/ppid/formulir-permohonan"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Formulir Permohonan Informasi Publik
                                    </a>
                                    <a
                                        href="/ppid/formulir-keberatan"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                    >
                                        <div
                                            class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700"
                                        >
                                            <svg
                                                class="w-2.5 h-2.5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 5l7 7-7 7"
                                                ></path>
                                            </svg>
                                        </div>
                                        Formulir Permohonan Keberatan Informasi Publik
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </aside>

                <!-- Main Content -->
                <div class="lg:col-span-3">
                    <!-- Profil PPID -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Profil PPID</h2>
                        </div>
                        <p class="font-semibold mb-4 text-gray-700 dark:text-gray-300">
                            Pejabat Pengelola Informasi dan Dokumentasi
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                            PPID (Pejabat Pengelola Informasi dan Dokumentasi) adalah pejabat yang bertanggung jawab
                            dalam penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan
                            publik. PPID Kantor Otoritas Bandar Udara Wilayah XII - Bandung bertugas untuk mengelola dan
                            memberikan pelayanan informasi publik sesuai dengan Undang-Undang Nomor 14 Tahun 2008
                            tentang Keterbukaan Informasi Publik.
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                            Dalam rangka meningkatkan transparansi dan akuntabilitas penyelenggaraan pemerintahan, PPID
                            berkomitmen untuk memberikan akses informasi publik yang mudah, cepat, dan tepat waktu
                            kepada masyarakat. Informasi yang disediakan meliputi informasi berkala, informasi serta
                            merta, dan informasi setiap saat yang dapat diakses oleh publik sesuai dengan peraturan
                            perundang-undangan yang berlaku.
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                            PPID Kantor OBU Wilayah XII - Bandung mengelola berbagai jenis informasi terkait kegiatan
                            pengawasan dan pembinaan kebandarudaraan di wilayah kerja yang meliputi Jawa Barat, termasuk
                            informasi tentang regulasi, standar teknis, dan operasional kebandarudaraan yang penting
                            untuk diketahui oleh pemangku kepentingan dan masyarakat umum.
                        </p>

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
                                Layanan Informasi
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Masyarakat dapat mengajukan permohonan informasi publik melalui berbagai saluran yang
                                telah disediakan oleh PPID. Setiap permohonan informasi akan ditindaklanjuti sesuai
                                dengan standar operasional prosedur yang berlaku dan dalam jangka waktu yang ditetapkan
                                oleh peraturan perundang-undangan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
