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
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Visi & Misi</h1>
            <p class="text-xl text-gray-300">Kantor Otoritas Bandar Udara Wilayah XII - Bandung</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    @include(
        "section-breadcrumb",
        [
            "breadcrumbs" => [["label" => "Profil", "url" => "/profil"], ["label" => "Visi & Misi"]],
        ]
    )

    <!-- Main Content -->
    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Content Grid with Sidebar -->
            <div class="grid lg:grid-cols-4 gap-6">
                <!-- Sidebar Navigation -->
                @include("profil-sidebar", ["activePage" => "visi-misi"])

                <!-- Main Content -->
                <div class="lg:col-span-3">
                    <!-- Visi & Misi -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Visi & Misi</h2>
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
