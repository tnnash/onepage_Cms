<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'testimonial' => 'This service has been exceptional. It has streamlined our processes and improved efficiency.',
            'client_name' => 'John Doe',
            'client_position' => 'CEO, Example Corp',
            'client_image' => 'images/man.jpg',
        ]);
        Testimonial::create([
            'testimonial' => 'The team was extremely helpful and provided amazing support throughout.',
            'client_name' => 'Jane Smith',
            'client_position' => 'Marketing Manager, Example Ltd',
            'client_image' => 'images/company1.jpg',
        ]);
    }
}
