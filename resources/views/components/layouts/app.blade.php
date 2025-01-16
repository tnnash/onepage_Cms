<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My One-Page Website</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <!-- Navbar (Menu) -->
    <nav class="bg-white text-black fixed w-auto z-10 top-0 left-0 shadow-md rounded-lg mx-auto w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center">
            <div class="flex items-center justify-center space-x-8">
                <div class="text-2xl font-semibold">Website</div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#home" class="text-lg hover:text-gray-300">Home</a>
                    <a href="#about" class="text-lg hover:text-gray-300">About</a>
                    <a href="#features" class="text-lg hover:text-gray-300">Features</a>
                    <a href="#services" class="text-lg hover:text-gray-300">Services</a>

                    <!-- Pricing -->
                    <a href="#pricing" class="text-lg hover:text-gray-300">Pricing</a>

                    <!-- Contact -->
                    <a href="#contact" class="text-lg hover:text-gray-300">Contact</a>
                    
                    <!-- Get Started Button -->
                    <a href="#get-started" class="text-lg bg-blue-800 px-4 py-2 text-white rounded hover:bg-blue-700">Get Started</a>
                </div>
            </div>

            <!-- Mobile Menu Button (Hamburger) -->
            <div class="md:hidden">
                <button id="menuButton" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobileMenu" class="md:hidden hidden bg-white text-black space-y-4 py-4 rounded-lg shadow-lg">
            <a href="#home" class="block text-center text-lg">Home</a>
            <a href="#about" class="block text-center text-lg">About</a>
            <a href="#features" class="block text-center text-lg">Features</a>
            
            <!-- Dropdown Menu for Services and Pricing -->
            <div class="relative">
                <button class="block w-full text-center text-lg">Services</button>
                <div class="bg-white text-black rounded shadow-lg mt-1 w-full">
                    <a href="#services" class="block px-4 py-2 hover:bg-gray-100 text-lg">Web Development</a>
                    <a href="#services" class="block px-4 py-2 hover:bg-gray-100 text-lg">App Development</a>
                    <a href="#services" class="block px-4 py-2 hover:bg-gray-100 text-lg">SEO Optimization</a>
                </div>
            </div>

            <a href="#pricing" class="block text-center text-lg">Pricing</a>
            <a href="#contact" class="block text-center text-lg">Contact</a>
            <a href="#get-started" class="block text-center bg-blue-800 px-4 py-2 text-white rounded hover:bg-blue-700 text-lg">Get Started</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="pt-20">
        {{ $slot }}
    </div>

    @livewireScripts

    <script>
        // Show dropdown menu on hover for desktop
        document.querySelectorAll('.relative').forEach(menu => {
            menu.addEventListener('mouseenter', () => {
                menu.querySelector('div').classList.remove('hidden');
            });
            menu.addEventListener('mouseleave', () => {
                menu.querySelector('div').classList.add('hidden');
            });
        });

        // Toggle the mobile menu when hamburger button is clicked
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>
