<?php 

namespace App\Client\Store\Categories\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\Categories\CategoriesMainSupport;
use App\Models\Category;

class CreateClient extends Client
{
	use GeneratorTrait;
	use CategoriesMainSupport;
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
	protected array $model = [Category::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
