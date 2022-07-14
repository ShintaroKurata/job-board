<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->text;
        $slug = str_slug($title);

            return [
            'user_id' =>\App\Models\User::all()->random()->id,
            'brand_id' =>\App\Models\User::all()->random()->id,
            'title'=>$title,
            'slug'=>$slug,
            'description'=>$this->faker->paragraph(rand(2,10)),
            'category_id'=>rand(1,5),
            'address'=>$this->faker->address,
            'price'=>'1000',
            'lot_number'=>'10000',
            'lot'=>'個',
            'type'=>'fulltime',
            'status'=>rand(0,1),
            'last_date'=>$this->faker->DateTime
        ];
    }
}
