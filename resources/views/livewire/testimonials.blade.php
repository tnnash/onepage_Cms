<section id="testimonials" class="bg-blue-50 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">What Our Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="flex items-center justify-center space-x-4">
                        <img src="{{ $testimonial->client_image }}" alt="{{ $testimonial->client_name }}" class="w-16 h-16 rounded-full">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">{{ $testimonial->client_name }}</h4>
                            <p class="text-sm text-gray-500">{{ $testimonial->client_position }}</p>
                        </div>
                    </div>

                    <!-- Stars aligned with user description -->
                    <div class="flex justify-center space-x-1 mb-4 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gold" viewBox="0 0 20 20">
                            <path d="M10 15.27l4.15 2.73-1.1-4.84L18 8.24l-4.91-.42L10 3 7.91 7.82 3 8.24l3.95 4.92-1.1 4.84L10 15.27z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gold" viewBox="0 0 20 20">
                            <path d="M10 15.27l4.15 2.73-1.1-4.84L18 8.24l-4.91-.42L10 3 7.91 7.82 3 8.24l3.95 4.92-1.1 4.84L10 15.27z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gold" viewBox="0 0 20 20">
                            <path d="M10 15.27l4.15 2.73-1.1-4.84L18 8.24l-4.91-.42L10 3 7.91 7.82 3 8.24l3.95 4.92-1.1 4.84L10 15.27z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gold" viewBox="0 0 20 20">
                            <path d="M10 15.27l4.15 2.73-1.1-4.84L18 8.24l-4.91-.42L10 3 7.91 7.82 3 8.24l3.95 4.92-1.1 4.84L10 15.27z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gold" viewBox="0 0 20 20">
                            <path d="M10 15.27l4.15 2.73-1.1-4.84L18 8.24l-4.91-.42L10 3 7.91 7.82 3 8.24l3.95 4.92-1.1 4.84L10 15.27z"/>
                        </svg>
                    </div>

                    <!-- Blue Quotes with black text inside -->
                    <p class="text-blue-500 italic mb-4">"<span class="text-black">{{ $testimonial->testimonial }}</span>"</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
