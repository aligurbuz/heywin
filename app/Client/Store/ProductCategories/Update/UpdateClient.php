<?php 

namespace App\Client\Store\ProductCategories\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\ProductCategories\ProductCategoriesMainSupport;
use App\Models\ProductCategory;

class UpdateClient extends Client
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
	protected array $rule = ['product_category_code' => 'required|integer'];
}
