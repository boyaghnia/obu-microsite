@extends("app")

@section("content")
    <!-- Hero Section -->
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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Visi dan Misi PPID</h1>
            <p class="text-xl text-gray-300">Pejabat Pengelola Informasi dan Dokumentasi</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Visi dan Misi"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "visi-misi", "openPpid" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Visi dan Misi PPID</h2>
                        </div>

                        <div class="mb-10">
                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl p-8 text-white mb-6">
                                <h3 class="text-2xl font-bold mb-4">Visi</h3>
                                <p class="text-lg leading-relaxed">
                                    Terwujudnya layanan informasi publik yang berkualitas, transparan, dan akuntabel
                                    dalam mendukung pelaksanaan tugas dan fungsi Kantor Otoritas Bandar Udara Wilayah
                                    XII - Bandung.
                                </p>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Misi</h3>
                            <div class="space-y-4">
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold"
                                    >
                                        1
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                            Meningkatkan kualitas pengelolaan dan pelayanan informasi publik secara
                                            efektif dan efisien.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold"
                                    >
                                        2
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                            Mewujudkan sistem informasi publik yang terintegrasi, mudah diakses, dan
                                            akuntabel.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold"
                                    >
                                        3
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                            Meningkatkan partisipasi masyarakat dalam pengawasan penyelenggaraan negara
                                            melalui keterbukaan informasi publik.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold"
                                    >
                                        4
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                            Mengembangkan kompetensi sumber daya manusia dalam pengelolaan informasi dan
                                            dokumentasi.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold"
                                    >
                                        5
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                            Membangun koordinasi dan kerjasama yang baik dengan stakeholder dalam
                                            pelayanan informasi publik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
