<section id="services" class="bg-blue-50 py-16"> <!-- Very pale blue background -->
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Services</h2>
        <div class="w-16 h-1 bg-blue-600 mx-auto mb-4"></div> <!-- Blue line below the heading -->
        <p class="text-gray-600 text-lg mb-8">
            We offer a wide range of high-quality services designed to meet your unique needs. Explore our offerings and see how we can help you achieve your goals.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($services as $service)
                <div class="bg-white p-8 rounded-lg shadow-md flex items-center"> <!-- Flex container -->
                    <div class="w-1/4 text-center pt-0"> <!-- Reduced top padding -->
                        <img src="{{ $service->image }}" alt="{{ $service->title }}" class="w-16 h-16 mx-auto"> <!-- Icon centered -->
                    </div>
                    <div class="w-3/4 text-left"> <!-- Right: Title and description -->
                        <h3 class="text-2xl font-semibold text-gray-800">{{ $service->title }}</h3>
                        <p class="text-gray-600 mt-2">{{ Str::limit($service->description, 100) }}</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 mt-4 inline-block font-medium">
                            Read More <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
