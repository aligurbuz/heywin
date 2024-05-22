<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Events\Balances;

use App\Facades\Database\Customer\Customer;

trait AfterCreate
{
	/**
	 * event performed after repository create
	 *
	 * @param array $result
	 * @param array $clientData
	 * @return void
	 */
	public function eventFireAfterCreate(array $result = [], array $clientData = []): void
	{
		Customer::increaseBalance($result['balance']);
	}
}
