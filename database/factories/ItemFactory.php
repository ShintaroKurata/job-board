<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'user_id' =>\App\Models\User::all()->random()->id,
            'brand_id' =>\App\Models\User::all()->random()->id,
            'title'=>$this->faker->text,
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
