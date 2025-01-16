<section id="pricing" class="bg-blue-50 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Our Pricing Plans</h2>
        <div class="w-16 h-1 bg-blue-600 mx-auto mb-4"></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pricingPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white p-8 rounded-lg shadow-lg 
                    <?php if($index == 1): ?> bg-blue-600 text-white <?php endif; ?>
                    transition-colors duration-300 ease-in-out">
                    <h3 class="text-2xl font-semibold mb-4"><?php echo e($plan->title); ?></h3>
                    <p class="text-4xl font-bold text-black mb-4 inline">
                        <!--[if BLOCK]><![endif]--><?php if($index == 1): ?> <?php echo e($plan->price); ?> <?php else: ?> <span class="text-blue-600"><?php echo e($plan->price); ?></span> <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </p>
                    <span class="text-xl text-gray-600">/month</span>
                    <p class="mb-4"><?php echo e($plan->description); ?></p>
                    <ul class="list-disc text-left mb-4 space-y-2">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = explode(',', $plan->features); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-center">
                                <span class="inline-block bg-blue-600 text-white rounded-full p-2 mr-3">
                                    <i class="fas fa-check"></i>
                                </span>
                                <?php echo e(trim($feature)); ?>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </ul>
                    <a href="<?php echo e($plan->button_link); ?>" class="
                        <?php if($index == 1): ?> bg-white text-blue-600 <?php else: ?> bg-blue-600 text-white <?php endif; ?>
                        py-2 px-6 rounded-full flex items-center justify-center">
                        <span>Buy Now</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 14.707a1 1 0 0 1 0-1.414L13.586 10H3a1 1 0 1 1 0-2h10.586L10.293 5.707a1 1 0 1 1 1.414-1.414l4.242 4.242a1 1 0 0 1 0 1.414l-4.242 4.242a1 1 0 0 1-1.414 0z" />
                        </svg>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/pricing.blade.php ENDPATH**/ ?>