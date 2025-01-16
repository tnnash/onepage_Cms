<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CtaTwo;

class CtaTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\CtaTwo::create([
        'title' => 'Get Started Now',
        'description' => 'Join us today and experience the difference. Let’s work together to achieve your goals!',
        'button_text' => 'Get Started Now',
        'button_link' => '#contact',
    ]);
}

}
