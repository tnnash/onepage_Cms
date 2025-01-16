
<section id="stats" class="py-16 bg-white-100 text-black px-8 lg:px-20" style="margin-top: -300px;">
    <div class="container mx-auto text-center">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($statistics as $stat)
                    <div class="bg-white p-6 rounded-lg flex items-center">
                        <img src="{{ asset($stat->icon) }}" alt="{{ $stat->title }} Logo" class="w-16 h-16 mr-4">
                        <div>
                            <h3 class="text-2xl font-semibold mb-2">{{ $stat->title }}</h3>
                            <p class="text-lg">{{ $stat->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
