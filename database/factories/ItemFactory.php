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
            "ean" => $this->faker->numberBetween(20,10000000),
            "name" => $this->faker->name,
            "description" => $this->faker->boolean ? $this->faker->text : null,
            "price" => $this->faker->numberBetween(0,1000),
            "currency" => $this->faker->randomElement(["CZK", "USD", "EUR"])
        ];
    }
}
