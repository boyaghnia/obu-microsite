<section class="relative w-full h-screen overflow-hidden bg-gray-900">
    <!-- Decorative circle - half visible on left -->
    <div class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 z-10">
        <img src="{{ asset("img/test1.png") }}" alt="" class="h-200 w-200 object-cover opacity-30" />
    </div>

    <div class="z-49 absolute left-20 bottom-35 text-white w-full max-w-7xl px-4">
        <h2 class="text-5xl text-bold mb-2 shadow-lg">Selamat Datang di Website Resmi</h2>
        <p class="text-3xl shadow-md">Kantor Otoritas Bandar Udara</p>
        <p class="text-3xl shadow-md">Wilayah XII - Bandung</p>
    </div>

    <!-- Hero Image Slider -->
    <div class="hero-slider absolute inset-0 w-full h-full">
        <div class="hero-slide absolute inset-0 w-full h-full">
            <img
                src="https://images.unsplash.com/photo-1524592714635-d77511a4834d?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2670"
                alt="Hero Image 1"
                class="w-full h-full object-cover"
            />
        </div>
        <div class="hero-slide absolute inset-0 w-full h-full opacity-0">
            <img
                src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="Hero Image 2"
                class="w-full h-full object-cover"
            />
        </div>
        <div class="hero-slide absolute inset-0 w-full h-full opacity-0">
            <img
                src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="Hero Image 3"
                class="w-full h-full object-cover"
            />
        </div>
        <div class="hero-slide absolute inset-0 w-full h-full opacity-0">
            <img
                src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.1.0&auto=format&fit=crop&q=80&w=2670"
                alt="Hero Image 4"
                class="w-full h-full object-cover"
            />
        </div>
    </div>

    <!-- Gradient overlay dari transparent ke warna di bawah -->
    <div
        class="absolute inset-x-0 bottom-0 h-64 bg-linear-to-b from-transparent to-white dark:to-gray-800 pointer-events-none z-10"
    ></div>

    <!-- Slide indicators (optional) -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
        <span class="slide-indicator w-2 h-2 rounded-full bg-white/50 transition-all duration-300"></span>
        <span class="slide-indicator w-2 h-2 rounded-full bg-white/50 transition-all duration-300"></span>
        <span class="slide-indicator w-2 h-2 rounded-full bg-white/50 transition-all duration-300"></span>
        <span class="slide-indicator w-2 h-2 rounded-full bg-white/50 transition-all duration-300"></span>
    </div>
</section>
