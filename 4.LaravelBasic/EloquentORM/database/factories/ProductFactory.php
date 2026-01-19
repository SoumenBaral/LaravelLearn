<?php

namespace Database\Factories;

use App\Models\Cateagory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::query()->inRandomOrder()->value('id'),
            'category_id'=> Cateagory::query()->inRandomOrder()->value('id'),
            'name'=>fake()->name(),
            'price' => fake()->numberBetween(1, 99),
        ];
    }
}
