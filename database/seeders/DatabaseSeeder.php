<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        \App\Models\User::factory(20)->create();
        \App\Models\Brand::factory(20)->create();
        \App\Models\Item::factory(20)->create();

        $categories = [
            'Clothes',
            'Bags',
            'Shoes',
            'Fashion Accessories',
            'Home Goods・Interior',
            'Handmade Goods',
            'Foods'
        ];
        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
