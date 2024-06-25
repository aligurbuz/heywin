<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Events\Referers;

use App\Facades\Database\Customer\Referer;
use App\Repositories\Repository;

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
        $repository = Repository::customerReferer()->instance(false);

        $parents = $repository->where('customer_friend_code', $result['customer_code'])->orderBy('level', 'ASC')->limit(2)->get();

        foreach ($parents as $parent) {
            Repository::customerReferer()->instance(false)->create([
                'customer_referer_code' => generateHash(),
                'customer_code' => $parent->customer_code,
                'customer_friend_code' => $result['customer_friend_code'],
                'level' => $level = $parent->level + 1,
                'percent' => Referer::$percents[$level],
            ]);
        }
    }
}
