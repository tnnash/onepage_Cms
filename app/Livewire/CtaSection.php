<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cta; // Import the Cta model

class CtaSection extends Component
{
    public function render()
    {
        // Fetch the CTA data from the database (if available)
        $cta = Cta::first(); // Or use a method like `latest()->first()` depending on your requirement

        // Pass the data to the view
        return view('livewire.cta-section', compact('cta'));
    }
}
