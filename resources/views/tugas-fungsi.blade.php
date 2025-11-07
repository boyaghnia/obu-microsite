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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Tugas & Fungsi</h1>
            <p class="text-xl text-gray-300">Kantor Otoritas Bandar Udara Wilayah XII - Bandung</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    @include(
        "section-breadcrumb",
        [
            "breadcrumbs" => [["label" => "Profil", "url" => "/profil"], ["label" => "Tugas & Fungsi"]],
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
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                ></path>
                            </svg>
                            Menu Profil
                        </h3>
                        <nav class="space-y-2">
                            <!-- Profil -->
                            <a
                                href="/profil"
                                class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-yellow-50 dark:hover:bg-gray-700 hover:text-yellow-600 dark:hover:text-yellow-500 transition-all duration-300"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                                    ></path>
                                </svg>
                                Profil
                            </a>
                            <!-- Sejarah -->
                            <a
                                href="/profil/sejarah"
                                class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-yellow-50 dark:hover:bg-gray-700 hover:text-yellow-600 dark:hover:text-yellow-500 transition-all duration-300"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                    ></path>
                                </svg>
                                Sejarah
                            </a>
                            <!-- Visi & Misi -->
                            <a
                                href="/profil/visi-misi"
                                class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-yellow-50 dark:hover:bg-gray-700 hover:text-yellow-600 dark:hover:text-yellow-500 transition-all duration-300"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                Visi & Misi
                            </a>
                            <!-- Struktur Organisasi -->
                            <a
                                href="/profil/struktur-organisasi"
                                class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-yellow-50 dark:hover:bg-gray-700 hover:text-yellow-600 dark:hover:text-yellow-500 transition-all duration-300"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                                    ></path>
                                </svg>
                                Struktur Organisasi
                            </a>
                            <!-- Tugas & Fungsi -->
                            <a
                                href="/profil/tugas-fungsi"
                                class="flex items-center gap-3 px-4 py-3 rounded-lg bg-yellow-500 text-white font-medium transition-all duration-300"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                                    ></path>
                                </svg>
                                Tugas & Fungsi
                            </a>
                        </nav>
                    </div>
                </aside>

                <!-- Main Content -->
                <div class="lg:col-span-3">
                    <!-- Tugas & Fungsi -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Tugas & Fungsi</h2>
                        </div>
                        <p class="font-semibold mb-4 text-gray-700 dark:text-gray-300">
                            Kantor Otoritas Bandar Udara Wilayah XII - Bandung
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quod id similique et
                            distinctio molestiae architecto officiis omnis quidem, error sint dolorum voluptates
                            corrupti labore tenetur, rerum provident accusamus accusantium! In, distinctio. Rerum
                            laborum, dolores fugiat consequuntur animi similique, deleniti optio itaque deserunt
                            cupiditate iste accusantium mollitia iusto magnam a, aperiam facere? Corrupti asperiores hic
                            quas molestias magni saepe aspernatur sint soluta fuga similique. Distinctio, eaque! Ea
                            incidunt sunt minima nihil, velit praesentium temporibus natus error perferendis corrupti!
                            Optio, mollitia! Nihil recusandae doloremque ullam perspiciatis ut exercitationem autem,
                            tempore ducimus sit quo. Quasi labore amet unde cum, incidunt odio maxime dolores ex
                            ducimus! Voluptates soluta, deleniti perferendis quam illo nihil laborum est explicabo odio
                            corrupti fugit corporis minus quae, sit obcaecati quibusdam mollitia possimus accusantium
                            doloribus harum? Sunt commodi sequi dolores quaerat reprehenderit eveniet, quas quis
                            corrupti fugit corporis explicabo cupiditate perferendis ea totam eum libero praesentium
                            culpa repellendus ducimus.
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ullam fuga aspernatur
                            minus cupiditate a placeat non hic cumque iure, fugit ut nesciunt quae iste blanditiis.
                            Libero ab magni dolore cum commodi, nobis eum non! Minus impedit dolor non optio nisi
                            laudantium nostrum? Autem minus dolores earum consequuntur explicabo similique ab
                            perferendis a cumque aspernatur modi numquam libero quas odio aliquam adipisci provident
                            dolorem ad pariatur, eveniet repellat mollitia alias unde quidem! Vero itaque sequi sint
                            facilis dolorem laudantium, provident deserunt magni hic porro voluptatum deleniti nemo
                            illum atque. Aliquid velit maxime inventore quia numquam accusamus perferendis adipisci
                            alias commodi.
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-4">
                            Dalam melaksanakan tugas, Kantor OBU Wilayah XII menyelenggarakan fungsi pengawasan terhadap
                            pemenuhan standar teknis dan operasional kebandarudaraan, pelayanan navigasi penerbangan,
                            serta angkutan udara di wilayah kerjanya.
                        </p>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat at commodi ex ipsam dolorem
                            nisi modi possimus fugit libero repudiandae vitae in corrupti qui aliquam nostrum laboriosam
                            est, laudantium consequatur?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
