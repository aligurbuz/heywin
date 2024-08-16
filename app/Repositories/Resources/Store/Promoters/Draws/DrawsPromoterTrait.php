<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\Draws;

use App\Libs\Date;
use App\Models\Entities\Draw;
use App\Repositories\EloquentRepository;
use Illuminate\Database\Eloquent\Builder;

trait DrawsPromoterTrait
{
	/**
	 * get auto DrawsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function drawsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Draw
	 */
	public function entity(): Draw
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

    public function inDate(): void
    {
        assignQueryParameters([
            'filter' => [
                'start_date' => ['>=' => Date::now()],
                'end_date' => ['>=' => Date::now()],
            ]
        ]);
    }

    public function country(): void
    {
        assignQueryParameters([
            'with' => [
                'drawCountries' => [
                    'select' => '*',
                    "with" => [
                        'country' => ['select' => '*']
                    ]
                ]
            ]
        ]);
    }

    /**
     * get authenticated user data
     *
     * @param null|Builder $builder
     * @param string|null $binding
     * @return EloquentRepository
     */
    public function productCategory(Builder $builder = null, ?string $binding = null): EloquentRepository
    {
        assignQueryParameters([
            'with' => [
                'product' => [
                    'select' => '*',
                    "with" => [
                        'productCategories' => ['select' => '*']
                    ]
                ]
            ]
        ]);

        if(!is_null($binding)){
            $this->repository = $this->builder($builder)->whereHas('product',function($product) use($binding){
                $product->whereHas('productCategories',function($category) use($binding){
                    $category->where('category_code',$binding);
                });
            });
        }

        return $this;
    }
}
