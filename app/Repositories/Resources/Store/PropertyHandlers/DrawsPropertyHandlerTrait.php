<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\PropertyHandlers;

trait DrawsPropertyHandlerTrait
{
	/**
	 * get client ranges for repository
	 *
	 * @var array
	 */
	protected array $ranges = [
        'inDate' => 'Lists valid draws.',
        'country' => 'gets country of the draw.',
    ];

	/**
	 * localization values for repository
	 *
	 * @var array
	 */
	protected array $localization = ['description', 'name'];

	/**
	 * hitter values for repository
	 *
	 * @var array
	 */
	protected array $hitter = ['remaining_stock'];

	/**
	 * denied eager loadings values for repository
	 *
	 * @var array
	 */
	protected array $deniedEagerLoadings = [];

	/**
	 * get auto eager loading values for repository
	 *
	 * @var array
	 */
	protected array $autoEagerLoadings = [];

	/**
	 * it contains columns to be used by groupBy method.
	 *
	 * @var array
	 */
	protected array $groupByFields = [];

	/**
	 * it contains aggregate methods to be used together groupBy method.
	 *
	 * @var array
	 */
	protected array $groupByProcessFields = [];

	/**
	 * get additional resource for repository
	 *
	 * @var array
	 */
	protected array $additionalResource = [];

	/**
	 * add post query for repository
	 *
	 * @var array
	 */
	protected array $addPostQueries = [
        'country' => 'store.drawCountries'
    ];
}
