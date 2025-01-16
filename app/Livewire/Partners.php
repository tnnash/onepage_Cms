<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Partner;

class Partners extends Component
{
    public function render()
    {
        $partners = Partner::all();
        return view('livewire.partners', ['partners' => $partners]);
    }
}

