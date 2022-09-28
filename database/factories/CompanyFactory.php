<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'slogan' => fake()->realText(25),
            'description' => fake()->realText(200),
            'city' => fake()->city(),
            'street_name' => fake()->streetName,
            'house_number' => 1,
            'zip_code' => strval(mt_rand(0000, 9999) . chr(rand(65,90)) . chr(rand(65,90))),
        ];
    }
}
