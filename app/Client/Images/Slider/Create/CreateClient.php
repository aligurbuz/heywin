<?php 

namespace App\Client\Images\Slider\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Images\Slider\SliderMainSupport;
use App\Models\Slider;

class CreateClient extends Client
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
