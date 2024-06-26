<?php

namespace App\Client\Store\Draws\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\Draws\DrawsMainSupport;
use App\Models\Draw;

class CreateClient extends Client
{
	use GeneratorTrait;
	use DrawsMainSupport;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = ['country'];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [Draw::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [
        'country' => 'required|array'
    ];
}
