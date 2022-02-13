<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(10),
            'ingredients' => $this->faker->sentence(10),
            'recipe' => $this->faker->sentence(10),
            'price' => $this->faker->sentence(10),
            'active' =>$this->faker->sentence(10),
            'category_id' => Category::factory()

        ];
    }
}
