@extends("app")

@section("content")
    <!-- Hero Section -->
    <section class="relative bg-gray-900 h-80 flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img
                src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="Gallery Hero"
                class="w-full h-full object-cover opacity-30"
            />
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-linear-to-b from-gray-900/50 to-gray-900/90"></div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Galeri Foto</h1>
            <p class="text-xl text-gray-300">Dokumentasi Kegiatan Kantor Otoritas Bandar Udara Wilayah XII</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    @include(
        "section-breadcrumb",
        [
            "breadcrumbs" => [["label" => "Galeri Foto"]],
        ]
    )

    <!-- Main Content -->
    <section class="bg-gray-800 dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Filter/Category Tabs -->
            <div class="flex flex-wrap gap-3 mb-12 justify-center">
                <button
                    class="px-6 py-2 bg-blue-500 text-white rounded-full font-medium hover:bg-blue-600 transition-colors"
                >
                    Semua Album
                </button>
                <button
                    class="px-6 py-2 bg-gray-700 text-gray-300 rounded-full font-medium hover:bg-gray-600 transition-colors"
                >
                    Kegiatan
                </button>
                <button
                    class="px-6 py-2 bg-gray-700 text-gray-300 rounded-full font-medium hover:bg-gray-600 transition-colors"
                >
                    Rapat
                </button>
                <button
                    class="px-6 py-2 bg-gray-700 text-gray-300 rounded-full font-medium hover:bg-gray-600 transition-colors"
                >
                    Kunjungan
                </button>
                <button
                    class="px-6 py-2 bg-gray-700 text-gray-300 rounded-full font-medium hover:bg-gray-600 transition-colors"
                >
                    Pelatihan
                </button>
            </div>

            <!-- Albums Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Album Card 1 -->
                <a
                    href="/galeri/album"
                    class="group bg-gray-900 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-700 hover:border-blue-500"
                >
                    <div class="relative h-64 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800"
                            alt="Album"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <!-- Photo count badge -->
                        <div
                            class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline-block mr-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            24 Foto
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-500 transition-colors">
                            Peringatan Hari Perhubungan Nasional 2025
                        </h3>
                        <p class="text-gray-400 text-sm mb-3">17 September 2025</p>
                        <p class="text-gray-300 leading-relaxed">
                            Dokumentasi perayaan Hari Perhubungan Nasional dengan tema "Bakti Transportasi Untuk Negeri"
                            di lingkungan Kantor OBU Wilayah XII.
                        </p>
                    </div>
                </a>

                <!-- Album Card 2 -->
                <a
                    href="/galeri/album"
                    class="group bg-gray-900 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-700 hover:border-blue-500"
                >
                    <div class="relative h-64 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800"
                            alt="Album"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline-block mr-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            18 Foto
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-500 transition-colors">
                            Rapat Koordinasi Pengawasan Keselamatan Penerbangan
                        </h3>
                        <p class="text-gray-400 text-sm mb-3">5 September 2025</p>
                        <p class="text-gray-300 leading-relaxed">
                            Rapat koordinasi membahas strategi pengawasan dan peningkatan standar keselamatan
                            penerbangan di wilayah kerja.
                        </p>
                    </div>
                </a>

                <!-- Album Card 3 -->
                <a
                    href="/galeri/album"
                    class="group bg-gray-900 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-700 hover:border-blue-500"
                >
                    <div class="relative h-64 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=800"
                            alt="Album"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline-block mr-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            32 Foto
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-500 transition-colors">
                            Kunjungan Direktur Jenderal Perhubungan Udara
                        </h3>
                        <p class="text-gray-400 text-sm mb-3">25 Agustus 2025</p>
                        <p class="text-gray-300 leading-relaxed">
                            Kunjungan kerja Dirjen Hubud ke Kantor OBU Wilayah XII Bandung dalam rangka evaluasi kinerja
                            dan pembinaan.
                        </p>
                    </div>
                </a>

                <!-- Album Card 4 -->
                <a
                    href="/galeri/album"
                    class="group bg-gray-900 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-700 hover:border-blue-500"
                >
                    <div class="relative h-64 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800"
                            alt="Album"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline-block mr-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            15 Foto
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-500 transition-colors">
                            Pelatihan Safety Management System (SMS)
                        </h3>
                        <p class="text-gray-400 text-sm mb-3">10 Agustus 2025</p>
                        <p class="text-gray-300 leading-relaxed">
                            Pelatihan peningkatan kompetensi pegawai dalam implementasi Safety Management System di
                            industri penerbangan.
                        </p>
                    </div>
                </a>

                <!-- Album Card 5 -->
                <a
                    href="/galeri/album"
                    class="group bg-gray-900 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-700 hover:border-blue-500"
                >
                    <div class="relative h-64 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800"
                            alt="Album"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline-block mr-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            21 Foto
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-500 transition-colors">
                            Inspeksi Bandara Husein Sastranegara
                        </h3>
                        <p class="text-gray-400 text-sm mb-3">28 Juli 2025</p>
                        <p class="text-gray-300 leading-relaxed">
                            Kegiatan inspeksi rutin fasilitas dan operasional Bandara Internasional Husein Sastranegara
                            Bandung.
                        </p>
                    </div>
                </a>

                <!-- Album Card 6 -->
                <a
                    href="/galeri/album"
                    class="group bg-gray-900 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-700 hover:border-blue-500"
                >
                    <div class="relative h-64 overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800"
                            alt="Album"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-semibold"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 inline-block mr-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            28 Foto
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-500 transition-colors">
                            Sosialisasi Regulasi Penerbangan Terbaru
                        </h3>
                        <p class="text-gray-400 text-sm mb-3">15 Juli 2025</p>
                        <p class="text-gray-300 leading-relaxed">
                            Sosialisasi dan edukasi regulasi penerbangan terbaru kepada stakeholder dan operator bandara
                            di wilayah kerja.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center gap-2 mt-12">
                <button class="px-4 py-2 bg-gray-700 text-gray-300 rounded-lg hover:bg-gray-600 transition-colors">
                    ← Prev
                </button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">1</button>
                <button class="px-4 py-2 bg-gray-700 text-gray-300 rounded-lg hover:bg-gray-600 transition-colors">
                    2
                </button>
                <button class="px-4 py-2 bg-gray-700 text-gray-300 rounded-lg hover:bg-gray-600 transition-colors">
                    3
                </button>
                <button class="px-4 py-2 bg-gray-700 text-gray-300 rounded-lg hover:bg-gray-600 transition-colors">
                    Next →
                </button>
            </div>
        </div>
    </section>
@endsection
