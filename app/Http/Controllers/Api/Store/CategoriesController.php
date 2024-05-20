<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\Categories\Create\CreateClient;
use App\Client\Store\Categories\Get\GetClient;
use App\Client\Store\Categories\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreCategoriesRepositoryContract;

class CategoriesController extends ApiController
{
	/**
	 * get categories data
	 *
	 * @param GetClient $client
	 * @param StoreCategoriesRepositoryContract $categoriesRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreCategoriesRepositoryContract $categoriesRepository): array
	{
		$client->handle();
		return $categoriesRepository->get();
	}


	/**
	 * create categories data
	 *
	 * @param CreateClient $client
	 * @param StoreCategoriesRepositoryContract $categoriesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, StoreCategoriesRepositoryContract $categoriesRepository): array|object
	{
		return $this->transaction(function() use($client,$categoriesRepository) {
		    $client->handle();
		    return $categoriesRepository->create();
		});
	}


	/**
	 * update categories data
	 *
	 * @param UpdateClient $client
	 * @param StoreCategoriesRepositoryContract $categoriesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, StoreCategoriesRepositoryContract $categoriesRepository): array|object
	{
		return $this->transaction(function() use($client,$categoriesRepository) {
		    $client->handle();
		    return $categoriesRepository->update();
		});
	}
}
