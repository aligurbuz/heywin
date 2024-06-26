<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\PropertyHandlers;

trait ProductsPropertyHandlerTrait
{
	/**
	 * get client ranges for repository
	 *
	 * @var array
	 */
	protected array $ranges = [
        'category' => 'It helps you to get the category of the product.',
        'currency' => 'It helps you to get the currency of the product.',
        'image' => 'It helps you to get the image of the product.',
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
	protected array $hitter = [];

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
        'category' => 'store.productCategories',
        'currency' => 'store.productCurrencies',
    ];
}
