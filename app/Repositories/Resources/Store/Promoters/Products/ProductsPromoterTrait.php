<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\Products;

use App\Models\Entities\Product;

trait ProductsPromoterTrait
{
    /**
     * get auto ProductsRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function productsRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }


    /**
     * get entity for repository
     *
     * @return Product
     */
    public function entity(): Product
    {
        return parent::entity();
    }


    /**
     * Appends to the end of the returned data.
     *
     * @return array
     */
    public function appends(): array
    {
        return [];
    }

    public function category(): void
    {
        assignQueryParameters([
            'with' => [
                'productCategories' => [
                    'select' => '*',
                    'with' => [
                        'category' => [
                            'select' => 'name'
                        ]
                    ]
                ]
            ]
        ]);
    }
}
