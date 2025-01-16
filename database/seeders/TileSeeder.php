<?php

namespace Database\Seeders;

use App\Models\Tile;
use App\Models\Feature;
use Illuminate\Database\Seeder;

class TileSeeder extends Seeder
{
    public function run()
    {
        $feature1 = Feature::find(1);
        $feature2 = Feature::find(2);
        $feature3 = Feature::find(3);

        $feature1->tiles()->create([
            'name' => 'Tile 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus...Description for Tile 1',
            'color' => 'blue'
        ]);

        $feature2->tiles()->create([
            'name' => 'Tile 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus...Description for Tile 1',
            'color' => 'green'
        ]);

        $feature3->tiles()->create([
            'name' => 'Tile 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus...Description for Tile 1',
            'color' => 'yellow'
        ]);
        
        $feature3->tiles()->create([
            'name' => 'Tile 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus...Description for Tile 1',
            'color' => 'yellow'
        ]);
        
    }
}
