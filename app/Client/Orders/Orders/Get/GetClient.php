<?php 

namespace App\Client\Orders\Orders\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Orders\Orders\OrdersMainSupport;
use App\Models\Order;

class GetClient extends Client
{
	use GeneratorTrait;
	use OrdersMainSupport;
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
	protected array $model = [Order::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
