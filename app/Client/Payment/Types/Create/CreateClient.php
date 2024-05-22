<?php 

namespace App\Client\Payment\Types\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Payment\Types\TypesMainSupport;
use App\Models\PaymentType;

class CreateClient extends Client
{
	use GeneratorTrait;
	use TypesMainSupport;
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
	protected array $model = [PaymentType::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
