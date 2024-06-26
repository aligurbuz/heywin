<?php 

namespace App\Client\Images\Slider\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Images\Slider\SliderMainSupport;
use App\Models\Slider;

class GetClient extends Client
{
	use GeneratorTrait;
	use SliderMainSupport;
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
	protected array $model = [Slider::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
