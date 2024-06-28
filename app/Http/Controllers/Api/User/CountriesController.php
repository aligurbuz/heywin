<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Client\User\Countries\Create\CreateClient;
use App\Client\User\Countries\Get\GetClient;
use App\Client\User\Countries\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\User\Contracts\UserCountriesRepositoryContract;

class CountriesController extends ApiController
{
	/**
	 * get countries data
	 *
	 * @param GetClient $client
	 * @param UserCountriesRepositoryContract $countriesRepository
	 * @return array
	 */
	public function get(GetClient $client, UserCountriesRepositoryContract $countriesRepository): array
	{
		$client->handle();
		return $countriesRepository->get();
	}


	/**
	 * create countries data
	 *
	 * @param CreateClient $client
	 * @param UserCountriesRepositoryContract $countriesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, UserCountriesRepositoryContract $countriesRepository): array|object
	{
		return $this->transaction(function() use($client,$countriesRepository) {
		    $client->handle();
		    return $countriesRepository->create();
		});
	}


	/**
	 * update countries data
	 *
	 * @param UpdateClient $client
	 * @param UserCountriesRepositoryContract $countriesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, UserCountriesRepositoryContract $countriesRepository): array|object
	{
		return $this->transaction(function() use($client,$countriesRepository) {
		    $client->handle();
		    return $countriesRepository->update();
		});
	}
}
