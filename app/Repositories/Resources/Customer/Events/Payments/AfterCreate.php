<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Events\Payments;

use App\Facades\Database\Currency\Currency;
use App\Factory\Factory;
use App\Repositories\Repository;

trait AfterCreate
{
    /**
     * event performed after repository create
     *
     * @param array $result
     * @return array
     */
    public function eventFireAfterCreate(array $result = []): array
    {
        $currency = Currency::get($result['currency_code']);

        $factory = Factory::payment()->create([
            'price_amount' => $result['amount'],
            'price_currency' => $currency->symbol
        ]);

        Repository::customerPayment()
            ->code($result['customer_payment_code'])
            ->update([['data' => $factory]]);

        $result['complete_payment_link'] = $factory['invoice_url'].'&paymentId='.$factory['iPayment']['payment_id'];

        return array_merge($result,['data' => $factory]);
    }
}
