<?php 

namespace App\Client\Images\Slider\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Images\Slider\SliderMainSupport;
use App\Models\Slider;

class UpdateClient extends Client
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
	protected array $rule = ['slider_code' => 'required|integer'];
}
