<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Events\DrawTickets;

use App\Facades\Database\Draw\Draw;

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
        Draw::decreaseStock($result['draw_code']);
	}
}
