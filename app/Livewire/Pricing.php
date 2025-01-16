<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PricingPlan;

class Pricing extends Component
{
    public function render()
    {
        $pricingPlans = PricingPlan::all();
        return view('livewire.pricing', ['pricingPlans' => $pricingPlans]);
    }
}

