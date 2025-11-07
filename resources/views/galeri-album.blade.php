@extends("app")

@section("content")
    <div class="pt-24 bg-gray-900">
        <!-- Breadcrumb -->
        @include(
            "section-breadcrumb",
            [
                "breadcrumbs" => [
                    ["label" => "Galeri Foto", "url" => "/galeri"],
                    ["label" => "Peringatan Hari Perhubungan Nasional 2025"],
                ],
            ]
        )
    </div>
    <!-- Album Header -->
    <section class="bg-gray-800 dark:bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-6">
                <span class="inline-block px-4 py-1 bg-blue-500 text-white rounded-full text-sm font-semibold mb-4">
                    Kegiatan
                </span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Peringatan Hari Perhubungan Nasional 2025
                </h1>
                <div class="flex items-center text-gray-400 space-x-6">
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                            />
                        </svg>
                        <span>17 September 2025</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                            />
                        </svg>
                        <span>24 Foto</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                            />
                        </svg>
                        <span>1,234 views</span>
                    </div>
                </div>
            </div>
            <p class="text-gray-300 text-lg leading-relaxed max-w-4xl">
                Dokumentasi perayaan Hari Perhubungan Nasional dengan tema "Bakti Transportasi Untuk Negeri" di
                lingkungan Kantor OBU Wilayah XII. Kegiatan meliputi upacara bendera, pemberian penghargaan kepada
                pegawai berprestasi, dan berbagai lomba untuk memeriahkan acara.
            </p>
        </div>
    </section>

    <!-- Photos Grid -->
    <section class="bg-gray-800 dark:bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Photo Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Photo Item 1 -->
                <div class="group cursor-pointer gallery-item" data-index="0">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800"
                            alt="Photo 1"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Photo Item 2 -->
                <div class="group cursor-pointer gallery-item" data-index="1">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800"
                            alt="Photo 2"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Photo Item 3 -->
                <div class="group cursor-pointer gallery-item" data-index="2">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=800"
                            alt="Photo 3"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Photo Item 4 -->
                <div class="group cursor-pointer gallery-item" data-index="3">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800"
                            alt="Photo 4"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Photo Item 5 -->
                <div class="group cursor-pointer gallery-item" data-index="4">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800"
                            alt="Photo 5"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Photo Item 6 -->
                <div class="group cursor-pointer gallery-item" data-index="5">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800"
                            alt="Photo 6"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Photo Item 7 -->
                <div class="group cursor-pointer gallery-item" data-index="6">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=800"
                            alt="Photo 7"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Photo Item 8 -->
                <div class="group cursor-pointer gallery-item" data-index="7">
                    <div class="relative h-64 bg-gray-900 rounded-2xl overflow-hidden shadow-xl">
                        <img
                            src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=800"
                            alt="Photo 8"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        />
                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-12 text-center">
                <a
                    href="/galeri"
                    class="inline-flex items-center px-6 py-3 bg-gray-700 text-white rounded-full hover:bg-gray-600 transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"
                        />
                    </svg>
                    Kembali ke Galeri
                </a>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center">
        <button id="close-lightbox" class="absolute top-4 right-4 text-white hover:text-blue-500 transition-colors">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Previous Button -->
        <button id="prev-photo" class="absolute left-4 text-white hover:text-blue-500 transition-colors">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-12 w-12"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Image Container -->
        <div class="max-w-6xl max-h-[90vh] px-16">
            <img id="lightbox-img" src="" alt="Lightbox" class="max-w-full max-h-[90vh] object-contain" />
            <div class="text-center mt-4">
                <p id="photo-counter" class="text-white text-lg"></p>
            </div>
        </div>

        <!-- Next Button -->
        <button id="next-photo" class="absolute right-4 text-white hover:text-blue-500 transition-colors">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-12 w-12"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <script>
        // Lightbox functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const photoCounter = document.getElementById('photo-counter');
        const closeLightbox = document.getElementById('close-lightbox');
        const prevPhoto = document.getElementById('prev-photo');
        const nextPhoto = document.getElementById('next-photo');
        const galleryItems = document.querySelectorAll('.gallery-item');

        const photos = [
            'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1920',
            'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920',
            'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1920',
            'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1920',
            'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1920',
            'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1920',
            'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=1920',
            'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=1920',
        ];

        let currentIndex = 0;

        function showPhoto(index) {
            currentIndex = index;
            lightboxImg.src = photos[index];
            photoCounter.textContent = `${index + 1} / ${photos.length}`;
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
        }

        galleryItems.forEach((item) => {
            item.addEventListener('click', () => {
                const index = parseInt(item.getAttribute('data-index'));
                showPhoto(index);
            });
        });

        closeLightbox.addEventListener('click', () => {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        });

        prevPhoto.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + photos.length) % photos.length;
            showPhoto(currentIndex);
        });

        nextPhoto.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % photos.length;
            showPhoto(currentIndex);
        });

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
            } else if (e.key === 'ArrowLeft') {
                currentIndex = (currentIndex - 1 + photos.length) % photos.length;
                showPhoto(currentIndex);
            } else if (e.key === 'ArrowRight') {
                currentIndex = (currentIndex + 1) % photos.length;
                showPhoto(currentIndex);
            }
        });

        // Close when clicking outside image
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
            }
        });
    </script>
@endsection
