@extends("app")

@section("content")
    <section class="relative bg-gray-900 h-96 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1517400508447-f8dd518b86db?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670" alt="Hero" class="w-full h-full object-cover opacity-30" />
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-gray-900/50 to-gray-900/90"></div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Prosedur Sengketa</h1>
            <p class="text-xl text-gray-300">Penyelesaian Sengketa Informasi Publik</p>
        </div>
    </section>

    @include("section-breadcrumb", ["breadcrumbs" => [["label" => "PPID"], ["label" => "Prosedur Sengketa"]]])

    <section class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-6">
                @include("ppid.ppid-sidebar", ["activePage" => "prosedur-sengketa", "openLayanan" => "true"])

                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Prosedur Pengajuan Sengketa Informasi Publik</h2>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 text-justify leading-relaxed mb-8">
                            Apabila pemohon informasi tidak puas dengan keputusan keberatan yang diberikan oleh Atasan PPID, pemohon dapat mengajukan penyelesaian sengketa informasi publik kepada Komisi Informasi.
                        </p>

                        <div class="mb-8 p-6 bg-red-50 dark:bg-red-900/20 rounded-xl border-l-4 border-red-500">
                            <h3 class="text-lg font-bold text-red-700 dark:text-red-400 mb-3">Syarat Pengajuan Sengketa</h3>
                            <ul class="space-y-2 text-sm text-red-600 dark:text-red-300">
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Telah melalui tahap permohonan informasi dan keberatan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Diajukan dalam waktu 14 hari kerja sejak diterimanya keputusan keberatan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1">•</span>
                                    <span>Tidak sedang dalam proses peradilan atau telah diputus oleh pengadilan</span>
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg">1</div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Persiapan Dokumen</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Pemohon menyiapkan dokumen pendukung:
                                    </p>
                                    <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <ul class="list-disc list-inside space-y-1 text-sm text-gray-600 dark:text-gray-400 ml-2">
                                            <li>Fotokopi identitas pemohon</li>
                                            <li>Surat tanda bukti permohonan informasi</li>
                                            <li>Surat keputusan keberatan dari Atasan PPID</li>
                                            <li>Alasan pengajuan sengketa</li>
                                            <li>Bukti-bukti pendukung lainnya</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg">2</div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Pengajuan ke Komisi Informasi</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Permohonan penyelesaian sengketa diajukan ke:
                                    </p>
                                    <div class="p-6 bg-blue-50 dark:bg-blue-900/20 rounded-xl border-2 border-blue-200 dark:border-blue-800">
                                        <h4 class="font-bold text-blue-700 dark:text-blue-400 mb-3">Komisi Informasi Provinsi/Pusat</h4>
                                        <p class="text-sm text-blue-600 dark:text-blue-300 mb-2">
                                            Alamat dan kontak Komisi Informasi dapat dilihat di website resmi Komisi Informasi.
                                        </p>
                                        <p class="text-sm text-blue-600 dark:text-blue-300">
                                            Website: <a href="https://www.komisiinformasi.go.id" class="underline" target="_blank">www.komisiinformasi.go.id</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg">3</div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Mekanisme Penyelesaian</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Komisi Informasi akan menyelesaikan sengketa melalui:
                                    </p>
                                    <div class="space-y-3">
                                        <div class="p-4 bg-green-50 dark:bg-green-900/20 rounded-lg border-l-4 border-green-500">
                                            <h5 class="font-semibold text-green-700 dark:text-green-400 mb-1">Mediasi</h5>
                                            <p class="text-sm text-green-600 dark:text-green-300">
                                                Penyelesaian sengketa melalui bantuan mediator dari Komisi Informasi untuk mencapai kesepakatan.
                                            </p>
                                        </div>
                                        <div class="p-4 bg-purple-50 dark:bg-purple-900/20 rounded-lg border-l-4 border-purple-500">
                                            <h5 class="font-semibold text-purple-700 dark:text-purple-400 mb-1">Ajudikasi</h5>
                                            <p class="text-sm text-purple-600 dark:text-purple-300">
                                                Penyelesaian sengketa melalui putusan Komisi Informasi yang bersifat mengikat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg">4</div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Waktu Penyelesaian</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Komisi Informasi wajib menyelesaikan sengketa informasi publik paling lambat <strong class="text-yellow-600">100 (seratus) hari kerja</strong> sejak permohonan penyelesaian sengketa dicatat dalam register.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="shrink-0">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-lg">5</div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Putusan Komisi Informasi</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        Putusan Komisi Informasi bersifat final dan mengikat. Jika tidak puas, para pihak dapat mengajukan keberatan ke Pengadilan Tata Usaha Negara dalam waktu 14 hari kerja.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 p-6 bg-yellow-50 dark:bg-gray-700 rounded-xl border-l-4 border-yellow-500">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Catatan Penting
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                Penyelesaian sengketa informasi publik melalui Komisi Informasi tidak dipungut biaya. Pastikan semua dokumen lengkap sebelum mengajukan permohonan penyelesaian sengketa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
