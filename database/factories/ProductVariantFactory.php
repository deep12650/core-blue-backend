<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Product Variant '. uniqid(),
            'sku' => 'SKU-' . uniqid(),
            'price' => rand(100000, 9999000),
            'sale_price' => rand(1000, 9999),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eg',
            'stock' => rand(0, 100),
            'is_featured' => rand(0, 1),
            'on_sale' => rand(0, 1),
            'is_active' => rand(0, 1),
            'meta_title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'meta_keywords' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ];
    }
}
