<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
           
    
                public function run(): void
        {
            $this->call(AboutSectionSeeder::class);
            $this->call(CtaTwoSeeder::class);
            $this->call(FeatureSeeder::class);
            $this->call(PartnersTableSeeder::class);
            $this->call(PricingPlansSeeder::class);
            $this->call(ServicesSeeder::class);
            $this->call(StatsSeeder::class);
            $this->call(StatisticsSeeder::class);
            $this->call(TestimonialsSeeder::class);
            $this->call(TileSeeder::class);
            $this->call(WelcomeSeeder::class);
            $this->call(FaqsTableSeeder::class);
             }


}
