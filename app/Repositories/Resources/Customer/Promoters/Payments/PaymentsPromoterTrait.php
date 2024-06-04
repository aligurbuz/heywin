<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Payments;

use App\Models\Entities\CustomerPayment;

trait PaymentsPromoterTrait
{
	/**
	 * get auto PaymentsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function paymentsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return CustomerPayment
	 */
	public function entity(): CustomerPayment
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
