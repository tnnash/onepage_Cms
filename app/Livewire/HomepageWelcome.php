<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Welcome;

class HomepageWelcome extends Component
{
    public $welcome;

    public function mount()
    {
        $this->welcome = Welcome::first();
    }

    public function render()
    {
        return view('livewire.homepage-welcome');
    }
}
