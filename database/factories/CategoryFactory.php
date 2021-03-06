<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'slug'        => Str::slug( $name ),
            'user_id'      => User::all()->random()->id,
            'photo' => 'https://picsum.photos/300?random' . rand( 233, 35235 ),
        ];
    }
}
