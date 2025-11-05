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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Profil Kami</h1>
            <p class="text-xl text-gray-300">Kantor Otoritas Bandar Udara Wilayah XII - Bandung</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-white dark:bg-gray-800 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Logo & Title -->
            <div class="flex flex-col items-center gap-6 mb-16">
                <div class="flex items-center gap-4">
                    <img src="{{ asset("img/logo-kemenhub.png") }}" class="w-24" alt="Kemenhub logo" />
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-gray-800 dark:text-white">
                            Kantor Otoritas Bandar Udara
                        </span>
                        <span class="text-xl font-semibold text-gray-600 dark:text-gray-300">
                            Wilayah XII - Bandung
                        </span>
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="max-w-5xl mx-auto mb-16">
                <img
                    src="https://images.unsplash.com/photo-1517400508447-f8dd518b86db?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                    alt="Kantor OBU"
                    class="rounded-2xl w-full h-96 object-cover shadow-2xl"
                />
            </div>

            <!-- Content Grid -->
            <div class="grid lg:grid-cols-2 gap-6">
                <!-- Profil -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700"
                >
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Profil</h2>
                    </div>
                    <p class="font-semibold mb-4 text-gray-700 dark:text-gray-300">
                        Kantor Otoritas Bandar Udara Wilayah XII - Bandung
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                        Kantor Otoritas Bandar Udara Wilayah XII Bandung merupakan unit pelaksana teknis di lingkungan
                        Kementerian Perhubungan yang berada di bawah dan bertanggung jawab kepada Direktur Jenderal
                        Perhubungan Udara.
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                        Kantor OBU Wilayah XII memiliki tugas melaksanakan pengawasan keselamatan dan keamanan
                        penerbangan di wilayah kerjanya sesuai dengan ketentuan peraturan perundang-undangan.
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed">
                        Dalam melaksanakan tugas, Kantor OBU Wilayah XII menyelenggarakan fungsi pengawasan terhadap
                        pemenuhan standar teknis dan operasional kebandarudaraan, pelayanan navigasi penerbangan, serta
                        angkutan udara di wilayah kerjanya.
                    </p>
                </div>

                <!-- Visi Misi -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700"
                >
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Visi & Misi</h2>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Visi</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed">
                            Terwujudnya penyelenggaraan bandar udara yang selamat, aman, nyaman, dan berdaya saing untuk
                            mendukung konektivitas nasional dan internasional.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Misi</h3>
                        <ul class="space-y-2">
                            <li class="flex gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <span class="text-yellow-500 font-bold">•</span>
                                <span>Meningkatkan pengawasan keselamatan dan keamanan penerbangan</span>
                            </li>
                            <li class="flex gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <span class="text-yellow-500 font-bold">•</span>
                                <span>Mengoptimalkan pelayanan bandar udara</span>
                            </li>
                            <li class="flex gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <span class="text-yellow-500 font-bold">•</span>
                                <span>Meningkatkan kompetensi SDM di bidang penerbangan</span>
                            </li>
                            <li class="flex gap-2 text-sm text-gray-600 dark:text-gray-400">
                                <span class="text-yellow-500 font-bold">•</span>
                                <span>Mendukung pengembangan infrastruktur transportasi udara</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sejarah -->
                <div
                    class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700"
                >
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Sejarah</h2>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                                Kantor Otoritas Bandar Udara Wilayah XII Bandung dibentuk berdasarkan Peraturan Menteri
                                Perhubungan dalam rangka meningkatkan efektivitas pengawasan dan pembinaan terhadap
                                penyelenggaraan bandar udara di wilayah Jawa Barat dan sekitarnya.
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed">
                                Seiring dengan perkembangan industri penerbangan nasional dan tuntutan peningkatan
                                keselamatan penerbangan, peran Kantor OBU semakin strategis dalam menjaga standar
                                operasional bandar udara.
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                                Wilayah kerja Kantor OBU Wilayah XII meliputi beberapa bandar udara penting di Jawa
                                Barat, termasuk Bandara Internasional Husein Sastranegara dan beberapa bandar udara
                                perintis.
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed">
                                Dengan komitmen tinggi terhadap keselamatan penerbangan, Kantor OBU Wilayah XII terus
                                berupaya meningkatkan kapasitas pengawasan dan memberikan pelayanan terbaik kepada
                                pemangku kepentingan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
