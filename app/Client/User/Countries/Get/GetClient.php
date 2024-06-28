<?php 

namespace App\Client\User\Countries\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\User\Countries\CountriesMainSupport;
use App\Models\UserCountry;

class GetClient extends Client
{
	use GeneratorTrait;
	use CountriesMainSupport;
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
	protected array $model = [UserCountry::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
