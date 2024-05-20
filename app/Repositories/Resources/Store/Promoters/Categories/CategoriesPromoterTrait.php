<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\Categories;

use App\Models\Entities\Category;

trait CategoriesPromoterTrait
{
	/**
	 * get auto CategoriesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function categoriesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Category
	 */
	public function entity(): Category
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
