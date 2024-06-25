<?php 

namespace App\Client\Customer\Referers\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Referers\ReferersMainSupport;
use App\Models\CustomerReferer;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use ReferersMainSupport;
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
	protected array $model = [CustomerReferer::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['customer_referer_code' => 'required|integer'];
}
