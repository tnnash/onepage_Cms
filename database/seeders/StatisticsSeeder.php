<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statisticsx;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statistics = [
            [
                'title' => 'Awards',
                'description' => '5+ Industry Awards',
                'icon' => 'images/logo.png',
            ],
            [
                'title' => 'Work Growth',
                'description' => '25% Yearly Growth',
                'icon' => 'images/logo.png',
            ],
            [
                'title' => 'Market',
                'description' => 'Expanding Globally',
                'icon' => 'images/logo.png',
            ],
            [
                'title' => 'Investments',
                'description' => '$10M in Investments',
                'icon' => 'images/logo.png',
            ],
        ];

        foreach ($statistics as $stat) {
            Statisticsx::create($stat);
        }
    }
}
