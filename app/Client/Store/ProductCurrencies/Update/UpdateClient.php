<?php 

namespace App\Client\Store\ProductCurrencies\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\ProductCurrencies\ProductCurrenciesMainSupport;
use App\Models\ProductCurrency;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use ProductCurrenciesMainSupport;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = [];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [ProductCurrency::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['product_currency_code' => 'required|integer'];
}
