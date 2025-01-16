
<div>
    <!-- Contact Section -->
    
    <section id="contact" class="bg-gray-100 py-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-16">
            <!-- Left Column with Contact Info (Blue Tile) -->
            <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
                <p class="text-lg mb-8">We'd love to hear from you! Feel free to get in touch with us by filling out the form or using the contact information below.</p>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <!-- Address with Icon -->
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-2xl mr-4"></i>
                        <div>
                            <h3 class="text-xl font-semibold">Our Address</h3>
                            <p><?php echo e($contact->address); ?></p>
                        </div>
                    </div>
                
                    <!-- Phone Number with Icon -->
                    <div class="flex items-center">
                        <i class="fas fa-phone-alt text-2xl mr-4"></i>
                        <div>
                            <h3 class="text-xl font-semibold">Phone</h3>
                            <p><?php echo e($contact->phone); ?></p>
                        </div>
                    </div>
                
                    <!-- Email Address with Icon -->
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-2xl mr-4"></i>
                        <div>
                            <h3 class="text-xl font-semibold">Email</h3>
                            <p><?php echo e($contact->email); ?></p>
                        </div>
                    </div>
                
                    <!-- Business Hours with Icon -->
                    <div class="flex items-center">
                        <i class="fas fa-clock text-2xl mr-4"></i>
                        <div>
                            <h3 class="text-xl font-semibold">Business Hours</h3>
                            <p><?php echo e($contact->business_hours); ?></p>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Right Column with Contact Form (White Tile) -->
            <div class="bg-white p-8 rounded-lg shadow-lg md:col-span-2">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Get in Touch</h2>
                <form action="#" method="POST" class="space-y-6">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="name" class="block text-sm font-semibold text-gray-800">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your name" required>
                        </div>
                        <div class="w-1/2">
                            <label for="email" class="block text-sm font-semibold text-gray-800">Your Email</label>
                            <input type="email" id="email" name="email" class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-800">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your message" required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="w-full py-3 px-6 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /var/www/html/onepage-cms/resources/views/livewire/contact.blade.php ENDPATH**/ ?>