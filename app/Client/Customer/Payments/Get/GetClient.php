<?php 

namespace App\Client\Customer\Payments\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Payments\PaymentsMainSupport;
use App\Models\CustomerPayment;

class GetClient extends Client
{
	use GeneratorTrait;
	use PaymentsMainSupport;
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
	protected array $model = [CustomerPayment::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
