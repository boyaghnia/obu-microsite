<aside class="lg:col-span-1">
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg sticky top-24">
        <nav
            class="space-y-2"
            x-data="{
                openPpid: {{ $openPpid ?? "true" }},
                openInformasi: {{ $openInformasi ?? "false" }},
                openLayanan: {{ $openLayanan ?? "false" }},
            }"
        >
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "profil" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "tugas-fungsi" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "visi-misi" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "regulasi" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "kontak" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "informasi-berkala" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "informasi-serta-merta" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "informasi-setiap-saat" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "informasi-dikecualikan" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "maklumat-pelayanan" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "prosedur-permohonan-informasi" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "prosedur-keberatan" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "prosedur-sengketa" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "laporan-layanan" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "formulir-permohonan" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "formulir-keberatan" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
                    >
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
