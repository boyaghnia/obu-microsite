{{-- resources/views/home.blade.php --}}
@extends("app")

@section("content")
    @include("section-hero")
    @include("section-profil")
    @include("section-slider")
    @include("section-layanan")
    @include("section-berita")
    @include("section-wilayahkerja")
    @include("section-galeri")
@endsection

@push("scripts")
    <script>
        const slider = document.getElementById('slider');
        let scrollPosition = 0;
        let animationId;
        const scrollSpeed = 0.5;

        function cloneSlides() {
            const slides = Array.from(slider.children);
            slides.forEach((slide) => {
                const clone = slide.cloneNode(true);
                slider.appendChild(clone);
            });
        }

        function autoScroll() {
            scrollPosition += scrollSpeed;
            const slideWidth = slider.children[0].offsetWidth;
            const gap = 24;
            const totalSlides = 5;
            const resetPoint = (slideWidth + gap) * totalSlides;

            if (scrollPosition >= resetPoint) {
                scrollPosition = 0;
            }

            slider.style.transform = `translateX(-${scrollPosition}px)`;
            animationId = requestAnimationFrame(autoScroll);
        }

        slider.addEventListener('mouseenter', () => cancelAnimationFrame(animationId));
        slider.addEventListener('mouseleave', () => (animationId = requestAnimationFrame(autoScroll)));

        cloneSlides();
        autoScroll();
    </script>
@endpush
