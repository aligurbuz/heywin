<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Balances;

use App\Models\Entities\CustomerBalance;

trait BalancesPromoterTrait
{
	/**
	 * get auto BalancesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function balancesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return CustomerBalance
	 */
	public function entity(): CustomerBalance
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
