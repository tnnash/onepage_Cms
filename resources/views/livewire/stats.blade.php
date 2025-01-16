<section id="stats" class="bg-white-100 py-16">
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach($stats as $stat)
                <div class="flex flex-col items-center bg-white p-6 rounded-lg">
                    <span class="text-5xl font-bold {{ $stat->color }}">{{ $stat->value }}</span>
                    <div class="w-16 h-1 bg-blue-600 mx-auto mt-4 mb-4"></div>
                    <p class="text-gray-600 mt-2">{{ $stat->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
