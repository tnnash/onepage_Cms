<section id="stats" class="bg-white-100 py-16">
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center bg-white p-6 rounded-lg">
                    <span class="text-5xl font-bold <?php echo e($stat->color); ?>"><?php echo e($stat->value); ?></span>
                    <div class="w-16 h-1 bg-blue-600 mx-auto mt-4 mb-4"></div>
                    <p class="text-gray-600 mt-2"><?php echo e($stat->title); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/stats.blade.php ENDPATH**/ ?>