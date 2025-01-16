<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'What is Laravel?',
                'answer' => 'Laravel is a PHP framework for building modern web applications.',
            ],
            [
                'question' => 'How do I install Laravel?',
                'answer' => 'You can install Laravel using Composer: composer create-project --prefer-dist laravel/laravel projectName',
            ],
            [
                'question' => 'What is an Eloquent model?',
                'answer' => 'Eloquent is an ORM (Object-Relational Mapping) for interacting with your database.',
            ],
            
        ]);
    }
}

