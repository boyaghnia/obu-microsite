<aside class="lg:col-span-1">
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg sticky top-24">
        <h3
            class="text-lg font-bold text-gray-800 dark:text-white mb-4 pb-3 border-b border-gray-200 dark:border-gray-700"
        >
            Menu Profil
        </h3>
        <nav class="space-y-2">
            <!-- Profil Section -->
            <div class="pb-2">
                <a
                    href="/profil"
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
                    href="/profil/sejarah"
                    class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "sejarah" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
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
                    Sejarah
                </a>
                <a
                    href="/profil/visi-misi"
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
                    Visi & Misi
                </a>
                <a
                    href="/profil/struktur-organisasi"
                    class="flex items-center gap-2 px-4 py-2 text-sm {{ $activePage == "struktur-organisasi" ? "bg-yellow-100 dark:bg-yellow-900 text-yellow-700 dark:text-yellow-300" : "text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" }} rounded-lg transition-colors"
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
                    Struktur Organisasi
                </a>
                <a
                    href="/profil/tugas-fungsi"
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
                    Tugas & Fungsi
                </a>
            </div>
        </nav>
    </div>
</aside>
