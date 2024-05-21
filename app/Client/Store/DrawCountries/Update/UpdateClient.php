<?php 

namespace App\Client\Store\DrawCountries\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\DrawCountries\DrawCountriesMainSupport;
use App\Models\DrawCountry;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use DrawCountriesMainSupport;
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
	protected array $model = [DrawCountry::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['draw_country_code' => 'required|integer'];
}
