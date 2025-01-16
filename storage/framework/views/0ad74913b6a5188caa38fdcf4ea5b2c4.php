<div>
    <!-- Call to Action Section -->
    <section id="cta" class="bg-blue-600 py-16">
        <div class="container mx-auto text-center text-white max-w-3xl px-4">
            <h2 class="text-4xl font-bold mb-4"><?php echo e($cta->title ?? 'Ready to Get Started?'); ?></h2>
            <p class="text-lg mb-8"><?php echo e($cta->description ?? 'Join us today and experience the difference. Let’s work together to achieve your goals!'); ?></p>
            <a href="<?php echo e($cta->button_link ?? '#contact'); ?>" class="px-6 py-6 bg-blue-600 text-white font-semibold rounded-full border-2 border-white hover:bg-blue-700">
                <?php echo e($cta->button_text ?? 'Get Started Now'); ?>

            </a>
        </div>
    </section>
</div>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/cta-section.blade.php ENDPATH**/ ?>