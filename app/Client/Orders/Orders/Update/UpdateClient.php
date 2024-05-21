<?php 

namespace App\Client\Orders\Orders\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Orders\Orders\OrdersMainSupport;
use App\Models\Order;

class UpdateClient extends Client
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
	protected array $rule = ['order_code' => 'required|integer'];
}
