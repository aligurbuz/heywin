<?php

declare(strict_types=1);

namespace App\Factory\Payment\Interfaces;

use App\Factory\Payment\CardConnect;
use App\Factory\Payment\Customer;
use App\Factory\Payment\Payment;
use App\Factory\Payment\Stripe;

interface PaymentInterface
{
    /**
     * @return array
     * @see CardConnect::createWithCard()
     * @see Payment::createWithCard()
     * @see Stripe::createWithCard()
     */
    public function createWithCard(): array;

    /**
     * @return array
     * @see CardConnect::createWithCard()
     * @see Payment::createWithCard()
     * @see Stripe::createWithCard()
     */
    public function createWithSavedCard(): array;

    /**
     * @param array $payLoad
     * @return array
     * @see Customer::create()
     */
    public function create(array $payLoad = []) : array;
}
