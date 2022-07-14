<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $brand_name = $this->faker->company;
        $slug= str_slug($brand_name);
        return[
            'user_id' =>\App\Models\User::all()->random()->id,
            'brand_name'=>$brand_name,
            'slug'=>$slug,
            'address'=>$this->faker->address,
            'phone'=>$this->faker->phoneNumber,
            'website'=>$this->faker->domainName,
            'logo'=>'t-shirt.png',
            'cover_photo'=>'cover-image.jpg',
            'slogan'=>'learn-earn and grow',
            'description'=>$this->faker->realText
        ];
    }
}
