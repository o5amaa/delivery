<?php

namespace Database\Factories;

use App\Models\MenuItem;
use App\Models\Offer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InOffer>
 */
class InOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'offer_id' => Offer::factory(),
            'menu_item_id'=>MenuItem::factory()
        ];
    }
}
