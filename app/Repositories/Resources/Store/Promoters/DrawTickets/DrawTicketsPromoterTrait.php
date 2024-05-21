<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\DrawTickets;

use App\Models\Entities\Ticket;

trait DrawTicketsPromoterTrait
{
	/**
	 * get auto DrawTicketsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function drawTicketsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Ticket
	 */
	public function entity(): Ticket
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
