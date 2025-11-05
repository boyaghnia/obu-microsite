@extends("app")

@section("content")
    <!-- Breadcrumb -->
    <section class="bg-gray-100 dark:bg-gray-900 py-6 pt-32">
        <div class="max-w-7xl mx-auto px-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a
                            href="/"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                        >
                            <svg
                                class="w-4 h-4 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                                ></path>
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg
                                class="w-6 h-6 text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <a
                                href="/berita"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white"
                            >
                                Berita
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg
                                class="w-6 h-6 text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">
                                Detail Berita
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-white dark:bg-gray-900 py-6">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Article Content -->
                <article class="lg:col-span-2">
                    <!-- Featured Image -->
                    <div class="mb-8 rounded-2xl overflow-hidden shadow-2xl">
                        <img
                            src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200"
                            alt="Featured News"
                            class="w-full h-96 object-cover"
                        />
                    </div>

                    <!-- Article Header -->
                    <div class="mb-8">
                        <!-- Category Badge -->
                        <div class="mb-4">
                            <span
                                class="inline-block bg-yellow-500 text-white text-sm font-semibold px-4 py-2 rounded-full"
                            >
                                SIARAN PERS
                            </span>
                        </div>

                        <!-- Title -->
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-white mb-6 leading-tight">
                            Peringatan Hari Perhubungan Nasional 2025: "Bakti Transportasi Untuk Negeri"
                        </h1>

                        <!-- Meta Information -->
                        <div
                            class="flex flex-wrap items-center gap-6 text-gray-600 dark:text-gray-400 border-t border-b border-gray-200 dark:border-gray-700 py-4"
                        >
                            <div class="flex items-center gap-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="font-medium">Administrator</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
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
                            <div class="flex items-center gap-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>5 menit baca</span>
                            </div>
                        </div>
                    </div>

                    <!-- Article Body -->
                    <div class="prose prose-lg dark:prose-invert max-w-none">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                            <strong>Bandung, 17 September 2025</strong>
                            – Kementerian Perhubungan Republik Indonesia melalui Kantor Otoritas Bandar Udara Wilayah
                            XII Bandung dengan penuh kebanggaan menjadi bagian dari kepanitiaan daerah se-Jawa Barat
                            dalam rangka memperingati Hari Perhubungan Nasional tahun 2025 dengan tema "Bakti
                            Transportasi Untuk Negeri".
                        </p>

                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                            Peringatan Hari Perhubungan Nasional merupakan momentum penting bagi seluruh insan
                            perhubungan untuk merefleksikan peran strategis sektor transportasi dalam mendukung
                            pembangunan nasional dan meningkatkan konektivitas antar wilayah di Indonesia.
                        </p>

                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mt-8 mb-4">
                            Komitmen Keselamatan Penerbangan
                        </h2>

                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                            Kepala Kantor Otoritas Bandar Udara Wilayah XII Bandung menegaskan komitmen kuat untuk terus
                            meningkatkan standar keselamatan dan keamanan penerbangan di seluruh wilayah kerja. Hal ini
                            sejalan dengan visi Kementerian Perhubungan untuk mewujudkan transportasi yang aman, nyaman,
                            dan terpercaya.
                        </p>

                        <blockquote
                            class="border-l-4 border-yellow-500 pl-6 py-2 my-6 bg-gray-50 dark:bg-gray-800 rounded-r-lg"
                        >
                            <p class="text-gray-700 dark:text-gray-300 italic">
                                "Sektor perhubungan memiliki peran vital dalam menggerakkan roda perekonomian dan
                                meningkatkan kesejahteraan masyarakat. Kami berkomitmen untuk terus memberikan pelayanan
                                terbaik dengan mengutamakan keselamatan dan keamanan."
                            </p>
                        </blockquote>

                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mt-8 mb-4">Rangkaian Kegiatan</h2>

                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                            Dalam rangka memeriahkan peringatan Hari Perhubungan Nasional 2025, Kantor OBU Wilayah XII
                            Bandung menyelenggarakan berbagai kegiatan, antara lain:
                        </p>

                        <ul class="list-disc list-inside space-y-2 mb-6 text-gray-700 dark:text-gray-300">
                            <li>Upacara bendera dan pembacaan sambutan Menteri Perhubungan</li>
                            <li>Donor darah bersama untuk kemanusiaan</li>
                            <li>Sosialisasi keselamatan penerbangan kepada masyarakat</li>
                            <li>Pameran teknologi dan inovasi transportasi udara</li>
                            <li>Kegiatan sosial dan bakti kepada masyarakat sekitar bandara</li>
                        </ul>

                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mt-8 mb-4">
                            Apresiasi dan Penghargaan
                        </h2>

                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                            Pada kesempatan ini, diberikan penghargaan kepada para pegawai dan stakeholder yang telah
                            memberikan kontribusi luar biasa dalam meningkatkan kualitas pelayanan dan keselamatan
                            penerbangan. Apresiasi ini diharapkan dapat memotivasi seluruh insan perhubungan untuk terus
                            berinovasi dan memberikan yang terbaik bagi bangsa dan negara.
                        </p>

                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                            Dengan semangat "Bakti Transportasi Untuk Negeri", Kantor Otoritas Bandar Udara Wilayah XII
                            Bandung akan terus berupaya meningkatkan kualitas pengawasan dan pembinaan terhadap seluruh
                            kegiatan penerbangan di wilayah kerjanya, demi terwujudnya transportasi udara yang aman,
                            selamat, dan terpercaya.
                        </p>
                    </div>

                    <!-- Tags -->
                    <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Tags:</h3>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-sm hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer transition-colors"
                            >
                                Hari Perhubungan
                            </span>
                            <span
                                class="px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-sm hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer transition-colors"
                            >
                                OBU Bandung
                            </span>
                            <span
                                class="px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-sm hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer transition-colors"
                            >
                                Keselamatan Penerbangan
                            </span>
                            <span
                                class="px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full text-sm hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer transition-colors"
                            >
                                Transportasi
                            </span>
                        </div>
                    </div>

                    <!-- Share Buttons -->
                    <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">Bagikan:</h3>
                        <div class="flex gap-3">
                            <button
                                class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                                    />
                                </svg>
                                Facebook
                            </button>
                            <button
                                class="flex items-center gap-2 px-4 py-2 bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition-colors"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                                    />
                                </svg>
                                Twitter
                            </button>
                            <button
                                class="flex items-center gap-2 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
                                    />
                                </svg>
                                WhatsApp
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="sticky top-24 space-y-8">
                        <!-- Berita Terkait -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-100 dark:border-gray-700"
                        >
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-6">Berita Terkait</h3>
                            <div class="space-y-6">
                                <article
                                    class="pb-6 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0"
                                >
                                    <div class="mb-3 overflow-hidden rounded-lg">
                                        <img
                                            src="https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?w=400"
                                            alt="Related News"
                                            class="w-full h-32 object-cover hover:scale-105 transition-transform duration-300"
                                        />
                                    </div>
                                    <h4
                                        class="text-sm font-bold text-gray-800 dark:text-white mb-2 hover:text-blue-600 transition-colors cursor-pointer line-clamp-3"
                                    >
                                        Kemenhub Pastikan Keselamatan Penerbangan Haji
                                    </h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">18 Juni 2025</p>
                                </article>

                                <article
                                    class="pb-6 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0"
                                >
                                    <div class="mb-3 overflow-hidden rounded-lg">
                                        <img
                                            src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?w=400"
                                            alt="Related News"
                                            class="w-full h-32 object-cover hover:scale-105 transition-transform duration-300"
                                        />
                                    </div>
                                    <h4
                                        class="text-sm font-bold text-gray-800 dark:text-white mb-2 hover:text-blue-600 transition-colors cursor-pointer line-clamp-3"
                                    >
                                        Pisah Sambut Pimpinan OBU Wilayah XII
                                    </h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">28 Mei 2025</p>
                                </article>

                                <article>
                                    <div class="mb-3 overflow-hidden rounded-lg">
                                        <img
                                            src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400"
                                            alt="Related News"
                                            class="w-full h-32 object-cover hover:scale-105 transition-transform duration-300"
                                        />
                                    </div>
                                    <h4
                                        class="text-sm font-bold text-gray-800 dark:text-white mb-2 hover:text-blue-600 transition-colors cursor-pointer line-clamp-3"
                                    >
                                        Safety Campaign di Bandara Husein Sastranegara
                                    </h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">2 Des 2024</p>
                                </article>
                            </div>
                        </div>

                        <!-- Newsletter -->
                        <div class="bg-yellow-500 rounded-2xl p-6 shadow-lg text-white">
                            <h3 class="text-xl font-bold mb-3">Berlangganan Newsletter</h3>
                            <p class="text-sm mb-4 text-white/90">
                                Dapatkan update berita terbaru langsung ke email Anda
                            </p>
                            <form class="space-y-3">
                                <input
                                    type="email"
                                    placeholder="Email Anda"
                                    class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-white"
                                />
                                <button
                                    type="submit"
                                    class="w-full px-4 py-2 bg-white text-yellow-500 font-semibold rounded-lg hover:bg-gray-100 transition-colors"
                                >
                                    Berlangganan
                                </button>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>

            <!-- Navigation to other articles -->
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <div class="grid md:grid-cols-2 gap-6">
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700"
                    >
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">← Berita Sebelumnya</p>
                        <h4
                            class="text-lg font-bold text-gray-800 dark:text-white group-hover:text-blue-600 transition-colors"
                        >
                            Kemenhub Pastikan Keselamatan dan Keamanan Penerbangan Haji
                        </h4>
                    </a>
                    <a
                        href="#"
                        class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 text-right"
                    >
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">Berita Selanjutnya →</p>
                        <h4
                            class="text-lg font-bold text-gray-800 dark:text-white group-hover:text-blue-600 transition-colors"
                        >
                            Pembukaan Posko Natal 2024 dan Tahun Baru 2025
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
