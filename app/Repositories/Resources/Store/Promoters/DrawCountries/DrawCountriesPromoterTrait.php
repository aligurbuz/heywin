<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\DrawCountries;

use App\Models\Entities\DrawCountry;

trait DrawCountriesPromoterTrait
{
	/**
	 * get auto DrawCountriesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function drawCountriesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return DrawCountry
	 */
	public function entity(): DrawCountry
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
