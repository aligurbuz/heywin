<?php

namespace App\Client\Store\Draws\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\Draws\DrawsMainSupport;
use App\Exceptions\Exception;
use App\Models\Draw;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use DrawsMainSupport;
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
	protected array $model = [Draw::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['draw_code' => 'required|integer'];

    /**
     * @var int
     */
    protected int $remainingStock;

    /**
     * @return void
     */
    protected function remainingStock(): void
    {
        Exception::customException('remainingStockUpdate');
    }
}
