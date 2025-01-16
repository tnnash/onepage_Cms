<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stat;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stat::create([
            'title' => 'Clients',
            'value' => '150+',
            'color' => 'text-blue-600',
        ]);
        Stat::create([
            'title' => 'Projects',
            'value' => '200+',
            'color' => 'text-green-600',
        ]);
        Stat::create([
            'title' => 'Hours of Support',
            'value' => '5,000+',
            'color' => 'text-red-600',
        ]);
        Stat::create([
            'title' => 'Workers',
            'value' => '50+',
            'color' => 'text-purple-600',
        ]);
    }
}
