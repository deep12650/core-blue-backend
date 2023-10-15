<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ProductCategories = [
            'Motorboat',
            'Sailboat',
            'Yacht',
            'Narrow boat',
            'Canoe',
            'Kayak',
            'Rowboat',
            'Fishing Boat',
            'Dinghy',
            'Cabin Cruiser',
            'Houseboat',
            'Jet Ski',
            'Inflatable Boat',
            'Catamaran',
            'Ferry',
            'Trawler',
            'Cruise Ship',
            'Speedboat',
            'Barge',
            'Dive Boat',
            'Lifeboat',
            // Add more boat types as needed
        ];

        return [
            'name' => $this->faker->randomElement($ProductCategories),
            'slug' => 'slug-' . rand(1000, 9999),
            'is_active' => rand(0, 1),
            'meta_title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'meta_keywords' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ];
    }
}
