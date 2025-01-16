<div>
    <section id="faq" class="bg-blue-50 py-16">
        <div class="container mx-auto text-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column with Question -->
                <div class="text-left">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Have a Question? Check Out the FAQ</h3>
                    <p class="text-gray-600 mb-4">Here are some common questions that we receive about our services. If you have more questions, feel free to reach out!</p>
                </div>
                <!-- Right Column with FAQs -->
                <div>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- FAQ Item -->
                        <div class="mb-6 bg-white p-6 rounded-lg">
                            <button class="w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center hover:text-blue-600 focus:outline-none transition-colors duration-200" onclick="toggleFAQ(<?php echo e($faq->id); ?>)">
                                <span><?php echo e($faq->question); ?></span>
                                <svg id="faq-arrow-<?php echo e($faq->id); ?>" class="w-6 h-6 text-gray-600 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                            <div id="faq-<?php echo e($faq->id); ?>" class="text-gray-600 hidden mt-2 transition-all ease-in-out duration-300">
                                <p><?php echo e($faq->answer); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript to toggle FAQ -->
    <script>
        function toggleFAQ(faqId) {
            var faqElement = document.getElementById('faq-' + faqId);
            var arrowElement = document.getElementById('faq-arrow-' + faqId);

            if (faqElement.classList.contains('hidden')) {
                faqElement.classList.remove('hidden');
                faqElement.style.maxHeight = faqElement.scrollHeight + "px"; // Allow smooth expansion
                arrowElement.classList.add('rotate-180'); // Rotate arrow when expanded
            } else {
                faqElement.classList.add('hidden');
                faqElement.style.maxHeight = "0"; // Collapse the content
                arrowElement.classList.remove('rotate-180'); // Reset arrow rotation when collapsed
            }
        }
    </script>
</div>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/faq-section.blade.php ENDPATH**/ ?>