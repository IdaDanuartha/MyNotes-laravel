<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lessons;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(5)->create();

        Category::create([
            'name' => 'Matematika',
            'slug' => 'matematika'
        ]);

        Category::create([
            'name' => 'Fisika',
            'slug' => 'fisika'
        ]);

        Category::create([
            'name' => 'Kimia',
            'slug' => 'kimia'   
        ]);

        Category::create([
            'name' => 'Biologi',
            'slug' => 'biologi'   
        ]);
        
        Lessons::factory(20)->create();
    }
}

