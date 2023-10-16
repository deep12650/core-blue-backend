<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Product;

final readonly class AllProducts
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args): \Illuminate\Database\Eloquent\Collection
    {
        return Product::all();
    }
}
