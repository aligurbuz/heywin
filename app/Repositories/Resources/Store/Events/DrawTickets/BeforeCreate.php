<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Events\DrawTickets;

use App\Exceptions\Exception;
use App\Facades\Database\Draw\Draw;

trait BeforeCreate
{
	/**
	 * event performed before repository create
	 *
	 * @param array $clientData
	 * @return void
	 */
	public function eventFireBeforeCreate(array $clientData = []): void
	{
		$this->isValidDraw($clientData['draw_code']);
	}

    /**
     * @param $draw_code
     * @return void
     */
    private function isValidDraw($draw_code): void
    {
        $isValidDraw = Draw::isValid($draw_code);

        if (!$isValidDraw) {
            Exception::customException('notValidDraw');
        }
    }
}
