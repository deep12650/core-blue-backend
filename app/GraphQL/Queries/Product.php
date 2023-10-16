<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

final readonly class Product
{
    /** @param  array{}  $args */
    public function __invoke($rootValue, array $args)
    {
        return Product::all();
    }
}
