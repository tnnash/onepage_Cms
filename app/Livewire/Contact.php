<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactInfo;  

class Contact extends Component
{
    public $contact;

    public function mount()
    {
       
        $this->contact = ContactInfo::first(); 
    }

    public function render()
    {
        return view('livewire.contact');
    }
}

