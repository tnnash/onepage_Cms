<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq; // Import the Faq model

class FaqSection extends Component
{
    public function render()
    {
        // Fetch the FAQs from the database
        $faqs = Faq::all();

        // Pass the data to the view
        return view('livewire.faq-section', compact('faqs'));
    }
}

