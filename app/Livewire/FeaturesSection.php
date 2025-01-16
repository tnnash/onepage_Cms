<?php
namespace App\Livewire;


use Livewire\Component;
use App\Models\Feature; // Assuming you have a Feature model
use App\Models\Tile;    // Assuming you have a Tile model

class FeaturesSection extends Component
{
    public $sectionTitle = 'Our Features';
    public $features;

    public function mount()
    {
        // Fetch features and associated tiles from the database
        $this->features = Feature::with('tiles')->get();
    }

    public function render()
    {
        return view('livewire.features-section');
    }
}
