
<section id="stats" class="py-16 bg-white-100 text-black px-8 lg:px-20" style="margin-top: -300px;">
    <div class="container mx-auto text-center">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white p-6 rounded-lg flex items-center">
                        <img src="<?php echo e(asset($stat->icon)); ?>" alt="<?php echo e($stat->title); ?> Logo" class="w-16 h-16 mr-4">
                        <div>
                            <h3 class="text-2xl font-semibold mb-2"><?php echo e($stat->title); ?></h3>
                            <p class="text-lg"><?php echo e($stat->description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/statistics.blade.php ENDPATH**/ ?>