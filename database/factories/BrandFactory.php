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
            'logo'=>'t-shirt.png',
            'cover_photo'=>'cover-image.jpg',
            'catch_copy'=>'learn-earn and grow',
            'home_page'=>$this->faker->domainName,
            'twitter_url'=>$this->faker->domainName,
            'instagram_url'=>$this->faker->domainName,
            'tiktok_url'=>$this->faker->domainName,
            'youtube_url'=>$this->faker->domainName,
            'note_url'=>$this->faker->domainName,
            'description'=>$this->faker->realText
        ];
    }
}
