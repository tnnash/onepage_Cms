<section id="partners" class="bg-gray-50 py-16">
    <div class="container mx-auto text-center">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($partners as $partner)
                    <div class="swiper-slide">
                        <img src="{{ $partner->logo_path }}" alt="{{ $partner->name }}" class="mx-auto">
                    </div>
                @endforeach
            </div>
            
            <!-- Dots Pagination -->
            <div class="swiper-pagination mt-4"></div> <!-- Added margin-top -->
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.mySwiper', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            2024: { slidesPerView: 4 },
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,  // Makes the dots clickable
            type: 'bullets',  // Dots pagination
        },
    });
});
</script>
