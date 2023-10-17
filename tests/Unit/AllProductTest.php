<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;

class AllProductTest extends TestCase
{
    use MakesGraphQLRequests;

    /**
     * @test
     */
    public function itCanQueryProducts()
    {
        $this->graphQL('
        {
           products {
              paginatorInfo {
                total
                  currentPage
                  hasMorePages
              }
              data {
                id
                name
                variants
                        {
                          name
                          price
                          description
                          sku
                          is_active
                        }
              }
           }
        }
        ')->assertJson([
            'data' => [
                'products' => [
                    'paginatorInfo' => [
                        'total' => 1,
                        'currentPage' => 1,
                        'hasMorePages' => false,
                    ],
                    'data' => [
                        [
                            'id' => 1,
                            'name' => 'Product 1',
                            'variants' => [
                                [
                                    'name' => 'Variant 1',
                                    'price' => 100,
                                    'description' => 'Description 1',
                                    'sku' => 'SKU 1',
                                    'is_active' => true,
                                ],
                                [
                                    'name' => 'Variant 2',
                                    'price' => 200,
                                    'description' => 'Description 2',
                                    'sku' => 'SKU 2',
                                    'is_active' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }
}
