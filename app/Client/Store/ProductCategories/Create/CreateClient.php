<?php 

namespace App\Client\Store\ProductCategories\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\ProductCategories\ProductCategoriesMainSupport;
use App\Models\ProductCategory;

class CreateClient extends Client
{
	use GeneratorTrait;
	use ProductCategoriesMainSupport;
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
	protected array $model = [ProductCategory::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
