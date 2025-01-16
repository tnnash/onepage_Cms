<section id="features" class="py-16 bg-white flex items-center justify-center">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8"><?php echo e($sectionTitle); ?></h2>
        <div class="w-16 h-1 bg-blue-600 mx-auto mb-4"></div>
        <!-- Filter Buttons -->
        <div class="flex justify-center space-x-4 mb-8">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button 
                    class="px-4 py-2 bg-gray-200 rounded-md shadow hover:bg-blue-500 hover:text-white filter-btn <?php echo e($index === 0 ? 'bg-blue-500 text-white' : ''); ?>" 
                    data-filter="tab<?php echo e($feature->id); ?>">
                    <?php echo e($feature->title); ?>

                </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <!-- Feature Content -->
        <div id="feature-content">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="feature-tab tab<?php echo e($feature->id); ?> <?php echo e($index === 0 ? '' : 'hidden'); ?>">
                    <div class="flex flex-col md:flex-row items-center justify-center mb-8">
                        <div class="md:w-1/2">
                            <!-- Enlarge and Align Left -->
                            <h3 class="text-4xl font-bold text-left mb-4"><?php echo e($feature->title); ?></h3>
                            <!-- Blue line below the feature title, aligned left -->
                            <div class="w-16 h-1 bg-blue-600 mb-4"></div>

                            <p class="text-gray-700"><?php echo e($feature->description); ?></p>
                        </div>
                        <div class="md:w-1/2 flex justify-center">
                            <img src="<?php echo e($feature->image_url); ?>" alt="<?php echo e($feature->title); ?>" class="rounded-lg max-w-md w-full h-auto">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $feature->tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-6 tile bg-gray-100 rounded-lg shadow-md">
                                <h4 class="text-lg font-semibold"><?php echo e($tile->name); ?></h4>
                                <p class="text-gray-600"><?php echo e($tile->description); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</section>

<!-- JavaScript for Filter Functionality and Random Pale Colors -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const tabs = document.querySelectorAll('.feature-tab');
        const tiles = document.querySelectorAll('.tile');

        // Function to generate a random pale color from a custom set of colors
        function getRandomPaleColor() {
            const colors = [
                '#f8d7da',  // Light pale red (Peach)
                '#d1e7ff',  // Light pale blue
                '#d4f8d4',  // Light pale green
                '#fbe8b3'   // Peach
            ];
            return colors[Math.floor(Math.random() * colors.length)];
        }

        // Assign random pale colors to each tile
        tiles.forEach(tile => {
            tile.style.backgroundColor = getRandomPaleColor();
        });

        filterButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-filter');

                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('bg-blue-500', 'text-white'));
                // Add active class to the clicked button
                button.classList.add('bg-blue-500', 'text-white');

                // Hide all tabs
                tabs.forEach(tab => tab.classList.add('hidden'));

                // Show the selected tab
                document.querySelector(`.${target}`).classList.remove('hidden');
            });

            // Make the first button active and its tab visible on load
            if (index === 0) {
                button.classList.add('bg-blue-500', 'text-white');
                tabs[index].classList.remove('hidden');
            }
        });
    });
</script>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/features-section.blade.php ENDPATH**/ ?>