<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\Countries;

use App\Models\Entities\UserCountry;

trait CountriesPromoterTrait
{
	/**
	 * get auto CountriesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function countriesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return UserCountry
	 */
	public function entity(): UserCountry
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
