<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Orders\Promoters\Orders;

use App\Models\Entities\Order;

trait OrdersPromoterTrait
{
	/**
	 * get auto OrdersRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function ordersRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Order
	 */
	public function entity(): Order
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
