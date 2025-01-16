<?php


namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        Feature::create([
            'title' => 'Feature 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus...Description for Feature 1',
             'image_url' => 'images/undraw_all-the-data_5lil.png'
        ]);

        Feature::create([
            'title' => 'Feature 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus...Description for Feature 2',
            'image_url' => 'images/undraw_all-the-data_5lil.png'
        ]);

        Feature::create([
            'title' => 'Feature 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus...Description for Feature 3',
            'image_url' => 'images/undraw_all-the-data_5lil.png'
        ]);
    }
}
