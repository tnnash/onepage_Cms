<div class="w-[80%] mx-auto px-4">
    <section id="cta" class="bg-blue-600 py-16 rounded-lg">
        <div class="container mx-auto px-4">
            <div class="w-[90%] mx-auto text-center text-white">
                <h2 class="text-4xl font-bold mb-4"><?php echo e($cta->title); ?></h2>
                <p class="text-lg mb-8"><?php echo e($cta->description); ?></p>
                <a href="<?php echo e($cta->button_link); ?>" class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-full border-2 border-white hover:bg-blue-700 transition duration-300"><?php echo e($cta->button_text); ?></a>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/cta.blade.php ENDPATH**/ ?>