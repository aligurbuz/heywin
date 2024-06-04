<?php

declare(strict_types=1);

namespace App\Factory\Payment;

use App\Exceptions\Exception;
use App\Factory\Payment\Interfaces\PaymentInterface;
use Illuminate\Support\Facades\Http;

/**
 * Class Customer
 * @package App\Factory\Payment
 */
class Customer extends PaymentManager implements PaymentInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];


    /**
     * Customer constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * @return array
     */
    public function createWithCard(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function createWithSavedCard(): array
    {
        return [];
    }

    /**
     * @param array $payLoad
     * @return array
     */
    public function create(array $payLoad = []): array
    {
        $request = array_merge($payLoad, [
            'order_id' => 'customer_balance_' . \App\Facades\Database\Customer\Customer::code(),
            'order_description' => 'customer_balance_loading',
            'ipn_callback_url' => 'https://nowpayments.io',
            'success_url' => 'https://nowpayments.io',
            'cancel_url' => 'https://nowpayments.io',
        ]);

        $invoiceResponse = Http::withHeaders([
            'x-api-key' => 'G8MKWY3-1K8M1AX-NG8TS3E-MJDFFVN',
            'Content-Type' => 'application/json'

        ])->post('https://api.nowpayments.io/v1/invoice', $request);

        if ($invoiceResponse->status() !== 200) {
            $exception = json_decode($invoiceResponse->body(), true);
            Exception::customException('customerPayment', ['exception' => $exception['message']]);
        }

        $invoiceResult = json_decode($invoiceResponse->body(), true);

        $invoicePaymentResponse = Http::withHeaders([
            'x-api-key' => 'G8MKWY3-1K8M1AX-NG8TS3E-MJDFFVN',
            'Content-Type' => 'application/json'

        ])->post('https://api.nowpayments.io/v1/invoice-payment', [
            'iid' => $invoiceResult['id'],
            'pay_currency' => $payLoad['price_currency'],
            'customer_email' => \App\Facades\Database\Customer\Customer::getEmail()
        ]);

        if ($invoicePaymentResponse->status() !== 201) {
            $exception = json_decode($invoiceResponse->body(), true);
            Exception::customException('customerPayment', ['exception' => $exception['message']]);
        }

        $invoiceResult['iPayment'] = json_decode($invoicePaymentResponse->body(),true);

        return $invoiceResult;
    }
}
