<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\note;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'user_id'=> User::factory(),
            'total_price'=> fake()->numberBetween(100, 1000),
            'address' => fake()->address(),
            'notes'=> fake()->sentence(),
            'screenshot'=>fake()->imageUrl()
        ];
    }
}
