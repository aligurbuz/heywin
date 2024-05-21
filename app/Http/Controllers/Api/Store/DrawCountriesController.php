<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\DrawCountries\Create\CreateClient;
use App\Client\Store\DrawCountries\Get\GetClient;
use App\Client\Store\DrawCountries\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreDrawCountriesRepositoryContract;

class DrawCountriesController extends ApiController
{
	/**
	 * get drawCountries data
	 *
	 * @param GetClient $client
	 * @param StoreDrawCountriesRepositoryContract $drawCountriesRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreDrawCountriesRepositoryContract $drawCountriesRepository): array
	{
		$client->handle();
		return $drawCountriesRepository->get();
	}


	/**
	 * create drawCountries data
	 *
	 * @param CreateClient $client
	 * @param StoreDrawCountriesRepositoryContract $drawCountriesRepository
	 * @return array|object
	 */
	public function create(
		CreateClient $client,
		StoreDrawCountriesRepositoryContract $drawCountriesRepository
	): array|object {
		return $this->transaction(function() use($client,$drawCountriesRepository) {
		    $client->handle();
		    return $drawCountriesRepository->create();
		});
	}


	/**
	 * update drawCountries data
	 *
	 * @param UpdateClient $client
	 * @param StoreDrawCountriesRepositoryContract $drawCountriesRepository
	 * @return array|object
	 */
	public function update(
		UpdateClient $client,
		StoreDrawCountriesRepositoryContract $drawCountriesRepository
	): array|object {
		return $this->transaction(function() use($client,$drawCountriesRepository) {
		    $client->handle();
		    return $drawCountriesRepository->update();
		});
	}
}
