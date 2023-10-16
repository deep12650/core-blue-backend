<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(100)->create(
            [
                'product_category_id' => rand(1, 10),
            ]
        );

        foreach ($products as $product) {
            ProductVariant::factory()->count(5)->create(
                [
                    'product_id' => $product->id,
                ]
            );
        }
    }
}
