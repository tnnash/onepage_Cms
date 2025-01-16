<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Statisticsx;

class Statistics extends Component
{
    public $statistics;

    public function mount()
    {
        // Fetch statistics from the database
        $this->statistics = Statisticsx::all();
    }

    public function render()
    {
        return view('livewire.statistics');
    }
}

