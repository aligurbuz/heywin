<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\ProductCategories\Create\CreateClient;
use App\Client\Store\ProductCategories\Get\GetClient;
use App\Client\Store\ProductCategories\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreProductCategoriesRepositoryContract;

class ProductCategoriesController extends ApiController
{
	/**
	 * get productCategories data
	 *
	 * @param GetClient $client
	 * @param StoreProductCategoriesRepositoryContract $productCategoriesRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreProductCategoriesRepositoryContract $productCategoriesRepository): array
	{
		$client->handle();
		return $productCategoriesRepository->get();
	}


	/**
	 * create productCategories data
	 *
	 * @param CreateClient $client
	 * @param StoreProductCategoriesRepositoryContract $productCategoriesRepository
	 * @return array|object
	 */
	public function create(
		CreateClient $client,
		StoreProductCategoriesRepositoryContract $productCategoriesRepository
	): array|object {
		return $this->transaction(function() use($client,$productCategoriesRepository) {
		    $client->handle();
		    return $productCategoriesRepository->create();
		});
	}


	/**
	 * update productCategories data
	 *
	 * @param UpdateClient $client
	 * @param StoreProductCategoriesRepositoryContract $productCategoriesRepository
	 * @return array|object
	 */
	public function update(
		UpdateClient $client,
		StoreProductCategoriesRepositoryContract $productCategoriesRepository
	): array|object {
		return $this->transaction(function() use($client,$productCategoriesRepository) {
		    $client->handle();
		    return $productCategoriesRepository->update();
		});
	}
}
