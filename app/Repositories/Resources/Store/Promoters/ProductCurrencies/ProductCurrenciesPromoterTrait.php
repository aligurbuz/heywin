<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\ProductCurrencies;

use App\Models\Entities\ProductCurrency;

trait ProductCurrenciesPromoterTrait
{
	/**
	 * get auto ProductCurrenciesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function productCurrenciesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return ProductCurrency
	 */
	public function entity(): ProductCurrency
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
