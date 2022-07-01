<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        $title = $this->faker->jobTitle();
        $description = $this->faker->realText();
        $price = random_int( 500, 1000 );
        return [
            'title'       => $title,
            'slug'        => Str::slug( $title ),
            'description' => $description,
            'price'       => $price,
            'category_id' => Category::all()->random()->id,
            'image' => 'https://picsum.photos/300?random' . rand( 233, 35235 ),
        ];
    }
}
