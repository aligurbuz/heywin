<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Images\Promoters\Product;

use App\Models\Entities\ProductImage;

trait ProductPromoterTrait
{
	/**
	 * get auto ProductRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function productRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return ProductImage
	 */
	public function entity(): ProductImage
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
