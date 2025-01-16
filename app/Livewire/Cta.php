<?php

namespace App\Livewire;

use App\Models\CtaTwo;
use Livewire\Component;

class Cta extends Component
{
    public $cta;

    public function mount()
    {
        $this->cta = CtaTwo::first(); // Assuming you're fetching the first CTA entry
    }

    public function render()
    {
        return view('livewire.cta');
    }
}

