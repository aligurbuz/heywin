<?php 

namespace App\Client\Images\Product\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Images\Product\ProductMainSupport;
use App\Models\ProductImage;

class GetClient extends Client
{
	use GeneratorTrait;
	use ProductMainSupport;
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
	protected array $model = [ProductImage::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
