<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_active_from' =>$this->faker->sentence(10),
            'time_active_from'=> $this->faker->sentence(10),
            'date_active_to' =>$this->faker->sentence(10),
            'time_active_to' => $this->faker->sentence(10),
            'offer_price' =>$this->faker->sentence(10),
        ];
    }
}
