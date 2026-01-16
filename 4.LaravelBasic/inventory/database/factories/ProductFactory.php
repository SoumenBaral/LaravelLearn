<?php

namespace Database\Factories;

use App\Models\Category;
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
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name'=>$this->faker->name(),
            'description'=>$this->faker->paragraph(1),
            'price'=>$this->faker->numberBetween(1,100),
            'discount'=>$this->faker->numberBetween(1,50),
            'tax'=>$this->faker->numberBetween(1,20),

        ];
    }
}
