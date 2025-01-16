<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Testimonial;

class Testimonials extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        return view('livewire.testimonials', ['testimonials' => $testimonials]);
    }
}

