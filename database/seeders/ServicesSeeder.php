<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'title' => 'Service One',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus sit amet ante tincidunt tempus.',
            'image' => 'https://via.placeholder.com/150',
        ]);
        Service::create([
            'title' => 'Service Two',
            'description' => 'Nullam varius erat sit amet lectus tincidunt, ut laoreet arcu dignissim. Etiam nec ex nec justo.',
            'image' => 'images/logo.png',
        ]);
        Service::create([
            'title' => 'Service Three',
            'description' => 'Proin ac nisi vel velit laoreet sodales a sit amet ligula. Fusce gravida nunc ut interdum lacinia.',
            'image' => 'images/logo.png',
        ]);
        Service::create([
            'title' => 'Service Four',
            'description' => 'Aenean laoreet, ante sit amet facilisis eleifend, leo arcu varius ex, eget iaculis leo turpis eget libero.',
            'image' => 'images/logo.png',
        ]);
    }
    
}
