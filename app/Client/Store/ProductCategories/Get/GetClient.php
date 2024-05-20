<?php 

namespace App\Client\Store\ProductCategories\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\ProductCategories\ProductCategoriesMainSupport;
use App\Models\ProductCategory;

class GetClient extends Client
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
