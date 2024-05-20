<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\ProductCurrencies\Create\CreateClient;
use App\Client\Store\ProductCurrencies\Get\GetClient;
use App\Client\Store\ProductCurrencies\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreProductCurrenciesRepositoryContract;

class ProductCurrenciesController extends ApiController
{
	/**
	 * get productCurrencies data
	 *
	 * @param GetClient $client
	 * @param StoreProductCurrenciesRepositoryContract $productCurrenciesRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreProductCurrenciesRepositoryContract $productCurrenciesRepository): array
	{
		$client->handle();
		return $productCurrenciesRepository->get();
	}


	/**
	 * create productCurrencies data
	 *
	 * @param CreateClient $client
	 * @param StoreProductCurrenciesRepositoryContract $productCurrenciesRepository
	 * @return array|object
	 */
	public function create(
		CreateClient $client,
		StoreProductCurrenciesRepositoryContract $productCurrenciesRepository
	): array|object {
		return $this->transaction(function() use($client,$productCurrenciesRepository) {
		    $client->handle();
		    return $productCurrenciesRepository->create();
		});
	}


	/**
	 * update productCurrencies data
	 *
	 * @param UpdateClient $client
	 * @param StoreProductCurrenciesRepositoryContract $productCurrenciesRepository
	 * @return array|object
	 */
	public function update(
		UpdateClient $client,
		StoreProductCurrenciesRepositoryContract $productCurrenciesRepository
	): array|object {
		return $this->transaction(function() use($client,$productCurrenciesRepository) {
		    $client->handle();
		    return $productCurrenciesRepository->update();
		});
	}
}
