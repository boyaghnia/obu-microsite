@extends("app")

@section("content")
    <!-- Hero Section -->
    <section class="relative bg-gray-900 h-80 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="News Hero"
                class="w-full h-full object-cover opacity-30"
            />
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-linear-to-b from-gray-900/50 to-gray-900/90"></div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Berita & Informasi</h1>
            <p class="text-xl text-gray-300">Update Terkini dari Kantor Otoritas Bandar Udara Wilayah XII</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Filter/Category Tabs -->
            <div class="flex flex-wrap gap-3 mb-12 justify-center">
                <button
                    class="px-6 py-2 bg-blue-600 text-white rounded-full font-medium hover:bg-blue-700 transition-colors"
                >
                    Semua Berita
                </button>
                <button
                    class="px-6 py-2 bg-gray-200 text-gray-700 dark:bg-gray-800 dark:text-gray-300 rounded-full font-medium hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors"
                >
                    Siaran Pers
                </button>
                <button
                    class="px-6 py-2 bg-gray-200 text-gray-700 dark:bg-gray-800 dark:text-gray-300 rounded-full font-medium hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors"
                >
                    Kegiatan
                </button>
                <button
                    class="px-6 py-2 bg-gray-200 text-gray-700 dark:bg-gray-800 dark:text-gray-300 rounded-full font-medium hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors"
                >
                    Pengumuman
                </button>
            </div>

            <!-- News Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main News Column -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Featured News Card -->
                    <article
                        class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700"
                    >
                        <a href="/berita-detail" class="block">
                            <div class="h-80 overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800"
                                    alt="Featured News"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                />
                            </div>
                        </a>
                        <div class="p-8">
                            <div class="mb-4">
                                <span
                                    class="inline-block bg-yellow-500 text-white text-xs font-semibold px-3 py-1 rounded-full"
                                >
                                    SIARAN PERS
                                </span>
                            </div>
                            <a href="/berita-detail">
                                <h2
                                    class="text-3xl font-bold text-gray-800 dark:text-white mb-4 hover:text-blue-600 transition-colors cursor-pointer"
                                >
                                    Peringatan Hari Perhubungan Nasional 2025: "Bakti Transportasi Untuk Negeri"
                                </h2>
                            </a>
                            <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-4">
                                <div class="flex items-center gap-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span>Administrator</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    <span>17 September 2025</span>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                                Bandung, 17 September 2025 – Kementerian Perhubungan Republik Indonesia melalui Kantor
                                Otoritas Bandar Udara Wilayah XII Bandung menjadi bagian kepanitiaan daerah se-Jawa
                                Bandung dalam rangka memperingati Hari Perhubungan Nasional tahun 2025...
                            </p>
                            <a
                                href="/berita-detail"
                                class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold"
                            >
                                <span>Baca Selengkapnya</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- News List -->
                    <article
                        class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700"
                    >
                        <div class="flex flex-col md:flex-row">
                            <a href="/berita-detail" class="md:w-2/5 h-64 md:h-auto overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?w=800"
                                    alt="News"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                />
                            </a>
                            <div class="md:w-3/5 p-6">
                                <div class="mb-3">
                                    <span
                                        class="inline-block bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 text-xs font-semibold px-3 py-1 rounded-full"
                                    >
                                        KEAMANAN
                                    </span>
                                </div>
                                <a href="/berita-detail">
                                    <h3
                                        class="text-2xl font-bold text-gray-800 dark:text-white mb-3 hover:text-blue-600 transition-colors cursor-pointer"
                                    >
                                        Kemenhub Pastikan Keselamatan dan Keamanan Penerbangan Haji
                                    </h3>
                                </a>
                                <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-4">
                                    <span>Administrator</span>
                                    <span>|</span>
                                    <span>18 Juni 2025</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                                    Jakarta – Direktorat Jenderal Perhubungan Udara Kementerian Perhubungan memastikan
                                    keselamatan dan keamanan 442 penumpang jemaah haji dari ancaman bom...
                                </p>
                                <a
                                    href="/berita-detail"
                                    class="text-blue-600 hover:text-blue-700 font-semibold text-sm"
                                >
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700"
                    >
                        <div class="flex flex-col md:flex-row">
                            <a href="/berita-detail" class="md:w-2/5 h-64 md:h-auto overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?w=800"
                                    alt="News"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                />
                            </a>
                            <div class="md:w-3/5 p-6">
                                <div class="mb-3">
                                    <span
                                        class="inline-block bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300 text-xs font-semibold px-3 py-1 rounded-full"
                                    >
                                        KEGIATAN
                                    </span>
                                </div>
                                <a href="/berita-detail">
                                    <h3
                                        class="text-2xl font-bold text-gray-800 dark:text-white mb-3 hover:text-blue-600 transition-colors cursor-pointer"
                                    >
                                        Pisah Sambut Pimpinan Kantor Otoritas Bandar Udara Wilayah XII
                                    </h3>
                                </a>
                                <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-4">
                                    <span>Administrator</span>
                                    <span>|</span>
                                    <span>28 Mei 2025</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                                    Bandung – Suasana haru dan keakraban mewarnai acara pisah sambut pimpinan Kantor OBU
                                    Wilayah XII Bandung. Acara ini menjadi peralihan tongkat pimpinan...
                                </p>
                                <a
                                    href="/berita-detail"
                                    class="text-blue-600 hover:text-blue-700 font-semibold text-sm"
                                >
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Pagination -->
                    <div class="flex justify-center gap-2 mt-12">
                        <button
                            class="px-4 py-2 bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors"
                        >
                            ← Prev
                        </button>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">1</button>
                        <button
                            class="px-4 py-2 bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors"
                        >
                            2
                        </button>
                        <button
                            class="px-4 py-2 bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors"
                        >
                            3
                        </button>
                        <button
                            class="px-4 py-2 bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors"
                        >
                            Next →
                        </button>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky top-24 space-y-8">
                        <!-- Search Box -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-100 dark:border-gray-700"
                        >
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Cari Berita</h3>
                            <div class="relative">
                                <input
                                    type="text"
                                    placeholder="Cari berita..."
                                    class="w-full px-4 py-3 pr-12 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-600"
                                />
                                <button
                                    class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.35-4.35"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Berita Terpopuler -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-100 dark:border-gray-700"
                        >
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-6">Berita Terpopuler</h3>
                            <div class="space-y-6">
                                <article
                                    class="pb-6 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0"
                                >
                                    <a href="/berita-detail" class="flex gap-4">
                                        <div class="shrink-0 w-20 h-20 overflow-hidden rounded-lg">
                                            <img
                                                src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=400"
                                                alt="Popular News"
                                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                            />
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="text-sm font-bold text-gray-800 dark:text-white mb-2 hover:text-blue-600 transition-colors cursor-pointer line-clamp-2"
                                            >
                                                Keberangkatan Kloter Pertama Jamaah Haji 2025
                                            </h4>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">2 Mei 2025</p>
                                        </div>
                                    </a>
                                </article>

                                <article
                                    class="pb-6 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0"
                                >
                                    <a href="/berita-detail" class="flex gap-4">
                                        <div class="shrink-0 w-20 h-20 overflow-hidden rounded-lg">
                                            <img
                                                src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?w=400"
                                                alt="Popular News"
                                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                            />
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="text-sm font-bold text-gray-800 dark:text-white mb-2 hover:text-blue-600 transition-colors cursor-pointer line-clamp-2"
                                            >
                                                Pembukaan Posko Natal 2024 dan Tahun Baru 2025
                                            </h4>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">18 Des 2024</p>
                                        </div>
                                    </a>
                                </article>

                                <article
                                    class="pb-6 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0"
                                >
                                    <a href="/berita-detail" class="flex gap-4">
                                        <div class="shrink-0 w-20 h-20 overflow-hidden rounded-lg">
                                            <img
                                                src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?w=400"
                                                alt="Popular News"
                                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                            />
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="text-sm font-bold text-gray-800 dark:text-white mb-2 hover:text-blue-600 transition-colors cursor-pointer line-clamp-2"
                                            >
                                                Pelita Air Service Buka Rute Baru CGK-KNO
                                            </h4>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">16 Des 2024</p>
                                        </div>
                                    </a>
                                </article>

                                <article>
                                    <a href="/berita-detail" class="flex gap-4">
                                        <div class="shrink-0 w-20 h-20 overflow-hidden rounded-lg">
                                            <img
                                                src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400"
                                                alt="Popular News"
                                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                            />
                                        </div>
                                        <div class="flex-1">
                                            <h4
                                                class="text-sm font-bold text-gray-800 dark:text-white mb-2 hover:text-blue-600 transition-colors cursor-pointer line-clamp-2"
                                            >
                                                Safety Campaign di Bandara Husein Sastranegara
                                            </h4>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">2 Des 2024</p>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>

                        <!-- Arsip -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-100 dark:border-gray-700"
                        >
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Arsip</h3>
                            <ul class="space-y-3">
                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition-colors"
                                    >
                                        September 2025 (12)
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition-colors"
                                    >
                                        Agustus 2025 (8)
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition-colors"
                                    >
                                        Juli 2025 (15)
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition-colors"
                                    >
                                        Juni 2025 (10)
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition-colors"
                                    >
                                        Mei 2025 (7)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
