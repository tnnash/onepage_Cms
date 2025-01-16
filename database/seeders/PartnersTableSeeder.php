<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::insert([
            ['name' => 'Company 1', 'logo_path' => 'imagescompany1.png'],
            ['name' => 'Company 2', 'logo_path' => 'images/company1.png'],
            ['name' => 'Company 3', 'logo_path' => 'images/company1.png'],
            // Add more entries as needed
        ]);
    }
}
