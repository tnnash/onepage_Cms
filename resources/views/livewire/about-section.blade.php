<section id="about" class="py-16 bg-white">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left md:mr-12">
            <h3 class="text-xl font-semibold text-gray-600 mb-4">More About Us</h3>
            <h2 class="text-3xl font-bold mb-4">{{ $heading }}</h2>
            <p class="text-gray-700 mb-4">{{ $description }}</p>

           

            <!-- List of Items (2 by 3 grid) -->
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <span class="w-5 h-5 mr-3 rounded-full bg-blue-500 text-white text-center">✔</span>
                    Lorem Ipsum is simply dummy
                </div>
                <div class="flex items-center">
                    <span class="w-5 h-5 mr-3 rounded-full bg-blue-500 text-white text-center">✔</span>
                    Lorem Ipsum is simply dummy
                </div>
                <div class="flex items-center">
                    <span class="w-5 h-5 mr-3 rounded-full bg-blue-500 text-white text-center">✔</span>
                    Lorem Ipsum is simply dummy
                </div>
                <div class="flex items-center">
                    <span class="w-5 h-5 mr-3 rounded-full bg-blue-500 text-white text-center">✔</span>
                    Lorem Ipsum is simply dummy
                </div>
                <div class="flex items-center">
                    <span class="w-5 h-5 mr-3 rounded-full bg-blue-500 text-white text-center">✔</span>
                    Lorem Ipsum is simply dummy
                </div>
                <div class="flex items-center">
                    <span class="w-5 h-5 mr-3 rounded-full bg-blue-500 text-white text-center">✔</span>
                    Lorem Ipsum is simply dummy
                </div>
            </div>
        </div>
        <div class="md:w-1/2 flex justify-center md:ml-12">
            <div class="relative">
                <img src="{{ $mainImage }}" 
                     alt="Main Image" 
                     class="rounded-lg w-3/4 md:w-2/3 opacity-90">
                <img src="{{ $insetImage }}" 
                     alt="Inset Image" 
                     class="absolute top-8 left-0 transform -translate-x-16 w-48 h-48 md:w-56 md:h-56 rounded-lg border-4 border-white opacity-100">
            </div>
        </div>
    </div>
</section>
