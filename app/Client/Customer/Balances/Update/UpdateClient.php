<?php 

namespace App\Client\Customer\Balances\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Balances\BalancesMainSupport;
use App\Models\CustomerBalance;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use BalancesMainSupport;
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
	protected array $model = [CustomerBalance::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['customer_balance_code' => 'required|integer'];
}
