<section id="partners" class="bg-gray-50 py-16">
    <div class="container mx-auto text-center">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <img src="<?php echo e($partner->logo_path); ?>" alt="<?php echo e($partner->name); ?>" class="mx-auto">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
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
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/partners.blade.php ENDPATH**/ ?>