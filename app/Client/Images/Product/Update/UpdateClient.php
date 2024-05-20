<?php 

namespace App\Client\Images\Product\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Images\Product\ProductMainSupport;
use App\Models\ProductImage;

class UpdateClient extends Client
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
	protected array $rule = ['product_image_code' => 'required|integer'];
}
