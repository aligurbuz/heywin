<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Events\Draws;

use App\Exceptions\Exception;

trait BeforeUpdate
{
    /**
     * event performed before repository update
     *
     * @param array $clientData
     * @param array $oldData
     * @return array
     */
    public function eventFireBeforeUpdate(array $clientData = [], array $oldData = []): array
    {
        if (($oldData['stock'] > $oldData['remaining_stock']) && $oldData['stock'] > $clientData['stock']) {
            Exception::customException('oldStock', ['oldstock' => $oldData['stock']]);
        }

        if (($oldData['stock'] > $oldData['remaining_stock']) && $oldData['stock'] < $clientData['stock']) {
            $diff = $clientData['stock'] - $oldData['stock'];
            $clientData['remaining_stock'] = $oldData['remaining_stock'] + $diff;
        }

        return $clientData;
    }
}
