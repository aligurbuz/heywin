<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Referers;

use App\Models\Entities\CustomerReferer;

trait ReferersPromoterTrait
{
	/**
	 * get auto ReferersRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function referersRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return CustomerReferer
	 */
	public function entity(): CustomerReferer
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
