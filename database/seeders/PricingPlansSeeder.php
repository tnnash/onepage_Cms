<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PricingPlan;

class PricingPlansSeeder extends Seeder
{
    public function run()
{
    PricingPlan::create([
        'title' => 'Basic Plan',
        'price' => '$19/month',
        'description' => 'Basic access to our services with limited features. Ideal for individuals or small teams.',
        'features' => '1 Project, 5 GB Storage, Email Support',
        'button_text' => 'Get Started',
        'button_link' => '#',
    ]);
    PricingPlan::create([
        'title' => 'Standard Plan',
        'price' => '$49/month',
        'description' => 'Our most popular plan. Full access to features and priority support.',
        'features' => '5 Projects, 50 GB Storage, Priority Support',
        'button_text' => 'Get Started',
        'button_link' => '#',
    ]);
    PricingPlan::create([
        'title' => 'Premium Plan',
        'price' => '$99/month',
        'description' => 'Premium plan with full access to all features and dedicated support.',
        'features' => 'Unlimited Projects, 200 GB Storage, Dedicated Support',
        'button_text' => 'Get Started',
        'button_link' => '#',
    ]);
}
}
