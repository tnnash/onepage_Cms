<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Welcome;

class WelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Welcome::create([
            'title' => 'Welcome to Our Website',
            'description' => 'Your one-stop solution for everything you need!',
            'button_text' => 'Get Started',
            'button_link' => '#get-started',
            'video_button_text' => 'Play Video',
            'video_button_icon' => 'fas fa-play',
            'image_path' => 'images/undraw_favorite-post_5ylx.svg',
        ]);
    }
}
