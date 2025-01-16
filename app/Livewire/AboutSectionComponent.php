<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AboutSection;

class AboutSectionComponent extends Component
{
    public function render()
    {
        $about = AboutSection::first();

        return view('livewire.about-section', [
            'heading' => $about->heading ?? 'About Us',
            'description' => $about->description ?? 'We are dedicated to providing the best solutions for our clients. Our team is equipped with the expertise and tools to help you succeed.',
            'mainImage' => $about->main_image ?? 'https://via.placeholder.com/350',
            'insetImage' => $about->inset_image ?? 'https://via.placeholder.com/150',
        ]);
    }
}


