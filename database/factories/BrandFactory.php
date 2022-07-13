<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'user_id' =>\App\Models\User::all()->random()->id,
            'brand_name'=>$this->faker->company,
            'address'=>$this->faker->address,
            'phone'=>$this->faker->phoneNumber,
            'website'=>$this->faker->domainName,
            'logo'=>'avatar/man.jpg',
            'cover_photo'=>'cover/tunblr-image.jpg',
            'slogan'=>'learn-earn and grow',
            'description'=>$this->faker->realText
        ];
    }
}
