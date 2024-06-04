<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Front;

use App\Client\Front\Langs\Create\CreateClient;
use App\Client\Front\Langs\Get\GetClient;
use App\Client\Front\Langs\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Front\Contracts\FrontLangsRepositoryContract;

class LangsController extends ApiController
{
	/**
	 * get langs data
	 *
	 * @param GetClient $client
	 * @param FrontLangsRepositoryContract $langsRepository
	 * @return array
	 */
	public function get(GetClient $client, FrontLangsRepositoryContract $langsRepository): array
	{
		$client->handle();
		return $langsRepository->get();
	}


	/**
	 * create langs data
	 *
	 * @param CreateClient $client
	 * @param FrontLangsRepositoryContract $langsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, FrontLangsRepositoryContract $langsRepository): array|object
	{
		return $this->transaction(function() use($client,$langsRepository) {
		    $client->handle();
		    return $langsRepository->create();
		});
	}


	/**
	 * update langs data
	 *
	 * @param UpdateClient $client
	 * @param FrontLangsRepositoryContract $langsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, FrontLangsRepositoryContract $langsRepository): array|object
	{
		return $this->transaction(function() use($client,$langsRepository) {
		    $client->handle();
		    return $langsRepository->update();
		});
	}
}
