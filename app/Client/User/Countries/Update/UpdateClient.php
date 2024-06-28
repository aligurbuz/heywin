<?php 

namespace App\Client\User\Countries\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\User\Countries\CountriesMainSupport;
use App\Models\UserCountry;

class UpdateClient extends Client
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
	protected array $rule = ['user_country_code' => 'required|integer'];
}
