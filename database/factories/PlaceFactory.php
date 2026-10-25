<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Socotra Island',
            'country' => 'Yemen',
            'category' => 'Island',
            'description' => 'A beautiful island with unusual trees and amazing landscapes.',
            'interesting_fact' => 'Socotra has many plants that cannot be found anywhere else.',
            'image' => 'socotra.avif',
            'is_featured' => true,
        ];
    }
}
