<section id="features" class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">{{ $title }}</h2>
        <!-- Filter Buttons -->
        <div class="flex justify-center space-x-4 mb-8">
            @foreach($filters as $filter)
                <button class="px-4 py-2 bg-gray-200 rounded-md shadow hover:bg-blue-500 hover:text-white filter-btn" data-filter="{{ $filter['id'] }}">{{ $filter['name'] }}</button>
            @endforeach
        </div>
        <!-- Feature Content -->
        <div id="feature-content">
            @foreach($features as $feature)
                <div class="feature-tab {{ $feature['id'] }} @if($loop->first) block @else hidden @endif">
                    <div class="flex flex-col md:flex-row items-center mb-8">
                        <div class="md:w-1/2">
                            <h3 class="text-xl font-bold">{{ $feature['name'] }}</h3>
                            <p class="text-gray-700">{{ $feature['description'] }}</p>
                        </div>
                        <div class="md:w-1/2">
                            <img src="{{ $feature['image'] }}" alt="{{ $feature['name'] }}" class="rounded-lg">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        @foreach($feature['tiles'] as $tile)
                            <div class="p-6 {{ $tile['bg_color'] }} rounded-lg shadow-md">
                                <h4 class="text-lg font-semibold">{{ $tile['title'] }}</h4>
                                <p class="text-gray-600">{{ $tile['description'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
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
    
</section>
