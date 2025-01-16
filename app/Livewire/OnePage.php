<?php

namespace App\Livewire;

use Livewire\Component;

class OnePage extends Component
{
    public $name, $email, $message;

    public function submit()
    {
        // Handle form submission
        session()->flash('success', 'Thank you for your message! We will get back to you soon.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.one-page');
    }
}
