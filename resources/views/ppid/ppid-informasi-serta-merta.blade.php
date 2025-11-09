@extends("app")

@section("content")
    <section class="relative bg-gray-900 h-96 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1517400508447-f8dd518b86db?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670" alt="Hero" class="w-full h-full object-cover opacity-30" />
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-gray-900/50 to-gray-900/90"></div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Informasi Serta Merta</h1>
            <p class="text-xl text-gray-300">Informasi yang Wajib Diumumkan Secara Serta Merta</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Informasi Serta Merta"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "informasi-serta-merta", "openInformasi" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Informasi Serta Merta</h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-6">
                            Informasi Serta Merta adalah informasi yang wajib disampaikan secara langsung kepada masyarakat karena dapat mengancam hajat hidup orang banyak dan ketertiban umum. Informasi ini diumumkan tanpa penundaan.
                        </p>

                        <div class="mb-8 p-6 bg-red-50 dark:bg-red-900/20 rounded-xl border-l-4 border-red-500">
                            <h3 class="text-lg font-bold text-red-700 dark:text-red-400 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                Kriteria Informasi Serta Merta
                            </h3>
                            <ul class="list-disc list-inside space-y-2 text-sm text-red-600 dark:text-red-300">
                                <li>Informasi yang dapat mengancam hajat hidup orang banyak</li>
                                <li>Informasi yang berkaitan dengan keselamatan dan keamanan</li>
                                <li>Informasi yang dapat mengganggu ketertiban umum</li>
                                <li>Informasi yang memerlukan tindakan segera</li>
                            </ul>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Jenis Informasi Serta Merta:</h3>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Informasi Keselamatan Penerbangan
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Peringatan terkait keselamatan penerbangan, penutupan bandara darurat, atau kondisi cuaca ekstrem yang mempengaruhi operasional penerbangan.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Informasi Keadaan Darurat
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi mengenai keadaan darurat, bencana alam, atau situasi yang memerlukan evakuasi atau tindakan cepat dari masyarakat.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Gangguan Operasional Bandara
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi tentang gangguan signifikan pada operasional bandara yang mempengaruhi jadwal penerbangan dan layanan bandara.
                                </p>
                            </div>

                            <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                <h4 class="font-bold text-gray-800 dark:text-white mb-2">
                                    Informasi Kesehatan dan Keselamatan Publik
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Informasi terkait wabah penyakit, kontaminasi, atau ancaman kesehatan lainnya yang mempengaruhi pengguna jasa bandara.
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 p-6 bg-yellow-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Penyampaian Informasi
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Informasi serta merta akan diumumkan melalui website resmi, media sosial, siaran pers, dan media massa. Pastikan Anda selalu mengikuti update informasi resmi dari Kantor OBU Wilayah XII - Bandung.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
