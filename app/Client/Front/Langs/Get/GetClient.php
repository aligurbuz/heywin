<?php 

namespace App\Client\Front\Langs\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Front\Langs\LangsMainSupport;
use App\Models\FrontLang;

class GetClient extends Client
{
	use GeneratorTrait;
	use LangsMainSupport;
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
	protected array $model = [FrontLang::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
