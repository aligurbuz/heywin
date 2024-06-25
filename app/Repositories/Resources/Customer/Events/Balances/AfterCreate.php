<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Events\Balances;

use App\Facades\Database\Customer\Customer;
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
        $balance = (float)$result['balance'];
        Customer::increaseBalance($balance);

        $refererParents = Repository::customerReferer()->instance(false)->where('customer_friend_code',$result['customer_code'])->get();

        foreach ($refererParents as $refererParent){
            Customer::setCode($refererParent['customer_code']);
            $percentage = ($balance/100) * $refererParent->percent;
            Customer::increaseBalance($percentage);
            $refererParent->increment('gain',$percentage);
        }
    }
}
