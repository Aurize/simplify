<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'category_id' => 0,
            'name' => 'Main',
            'slug' => 'main',
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Sport',
            'slug' => 'sport',
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Taniec',
            'slug' => 'taniec',
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Rekreacja',
            'slug' => 'rekreacja',
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Fitness',
            'slug' => 'fitness',
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Uroda',
            'slug' => 'uroda',
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Edukacja',
            'slug' => 'edukacja',
        ]);

        \App\Category::create([
            'category_id' => 2,
            'name' => 'Muzyka',
            'slug' => 'muzyka',
        ]);
    }
}
