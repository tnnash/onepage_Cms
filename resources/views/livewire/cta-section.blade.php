<div>
    <!-- Call to Action Section -->
    <section id="cta" class="bg-blue-600 py-16">
        <div class="container mx-auto text-center text-white max-w-3xl px-4">
            <h2 class="text-4xl font-bold mb-4">{{ $cta->title ?? 'Ready to Get Started?' }}</h2>
            <p class="text-lg mb-8">{{ $cta->description ?? 'Join us today and experience the difference. Let’s work together to achieve your goals!' }}</p>
            <a href="{{ $cta->button_link ?? '#contact' }}" class="px-6 py-6 bg-blue-600 text-white font-semibold rounded-full border-2 border-white hover:bg-blue-700">
                {{ $cta->button_text ?? 'Get Started Now' }}
            </a>
        </div>
    </section>
</div>
