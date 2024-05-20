<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\ProductCategories;

use App\Models\Entities\ProductCategory;

trait ProductCategoriesPromoterTrait
{
	/**
	 * get auto ProductCategoriesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function productCategoriesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return ProductCategory
	 */
	public function entity(): ProductCategory
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
}
