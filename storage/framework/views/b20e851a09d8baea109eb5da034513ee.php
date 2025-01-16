<section id="features" class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">Our Features</h2>
        <!-- Filter Buttons -->
        <div class="flex justify-center space-x-4 mb-8">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button 
                    class="px-4 py-2 bg-gray-200 rounded-md shadow hover:bg-blue-500 hover:text-white filter-btn" 
                    data-filter="tab<?php echo e($feature->id); ?>"><?php echo e($feature->title); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Feature Content -->
        <div id="feature-content">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="feature-tab tab<?php echo e($feature->id); ?> hidden">
                    <div class="flex flex-col md:flex-row items-center mb-8">
                        <div class="md:w-1/2">
                            <h3 class="text-xl font-bold"><?php echo e($feature->title); ?></h3>
                            <p class="text-gray-700"><?php echo e($feature->description); ?></p>
                        </div>
                        <div class="md:w-1/2">
                            <img src="<?php echo e(asset('images/' . $feature->image_url)); ?>" alt="<?php echo e($feature->title); ?>" class="rounded-lg">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <!-- Display tiles dynamically if necessary -->
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $feature->tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-6 bg-blue-100 rounded-lg shadow-md">
                                <h4 class="text-lg font-semibold"><?php echo e($tile->title); ?></h4>
                                <p class="text-gray-600"><?php echo e($tile->description); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</section>

<!-- JavaScript for Filter Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const tabs = document.querySelectorAll('.feature-tab');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-filter');

                // Hide all tabs
                tabs.forEach(tab => tab.classList.add('hidden'));

                // Show the selected tab
                document.querySelector(`.${target}`).classList.remove('hidden');
            });
        });
    });
</script>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/features.blade.php ENDPATH**/ ?>