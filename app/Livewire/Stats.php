<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Stat;

class Stats extends Component
{
    
        public function render()
        {
            $stats = Stat::all();
            return view('livewire.stats', ['stats' => $stats]);
        }
    
}
