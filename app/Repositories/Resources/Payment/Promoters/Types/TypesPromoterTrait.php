<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Payment\Promoters\Types;

use App\Models\Entities\PaymentType;

trait TypesPromoterTrait
{
	/**
	 * get auto TypesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function typesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return PaymentType
	 */
	public function entity(): PaymentType
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
