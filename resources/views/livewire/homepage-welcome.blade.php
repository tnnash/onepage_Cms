<div id="home" class="bg-white text-black" style="background: linear-gradient(to bottom right, #daebf9 55%, #ffffff 50%); padding-bottom: 200px;">
    <div class="container mx-auto flex items-center">
       
        <div class="lg:w-1/2 text-center lg:text-left bg-sky-100" style="padding-top: 100px;">
            <h1 class="text-5xl font-bold mb-4 text-black">{{ $welcome->title }}</h1>
            <p class="text-lg mb-6 text-black">{{ $welcome->description }}</p>
            
            <div class="flex items-center justify-center lg:justify-start space-x-4">
                <!-- Get Started Button -->
                <a href="{{ $welcome->button_link }}" class="bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 transition duration-300">
                    {{ $welcome->button_text }}
                </a>
                
                <!-- Play Video Button -->
                <a href="#play-video" class="text-blue-500 p-4 rounded-full border-2 border-blue-500 hover:bg-blue-100 transition duration-300">
                    <i class="{{ $welcome->video_button_icon }} text-2xl"></i>
                </a>
            </div>
        </div>
        
        <div class="lg:w-1/2" style="padding-top: 100px; padding-bottom: 200px;">
            <img src="{{ asset($welcome->image_path) }}" alt="Home Image" class="w-1/2 h-auto object-cover rounded-lg">
        </div>
    </div>
</div>
