<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        AboutSection::create([
            'heading' => 'About Us',
            'description' => 'We are dedicated to providing the best solutions for our clients. Our team is equipped with the expertise and tools to help you succeed.',
            'main_image' => 'images/about.jpg',
            'inset_image' => 'images/man.jpg',
        ]);
    }
}
