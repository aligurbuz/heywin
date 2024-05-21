<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\Draws\Create\CreateClient;
use App\Client\Store\Draws\Get\GetClient;
use App\Client\Store\Draws\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreDrawsRepositoryContract;

class DrawsController extends ApiController
{
	/**
	 * get draws data
	 *
	 * @param GetClient $client
	 * @param StoreDrawsRepositoryContract $drawsRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreDrawsRepositoryContract $drawsRepository): array
	{
		$client->handle();
		return $drawsRepository->get();
	}


	/**
	 * create draws data
	 *
	 * @param CreateClient $client
	 * @param StoreDrawsRepositoryContract $drawsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, StoreDrawsRepositoryContract $drawsRepository): array|object
	{
		return $this->transaction(function() use($client,$drawsRepository) {
		    $client->handle();
		    return $drawsRepository->create();
		});
	}


	/**
	 * update draws data
	 *
	 * @param UpdateClient $client
	 * @param StoreDrawsRepositoryContract $drawsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, StoreDrawsRepositoryContract $drawsRepository): array|object
	{
		return $this->transaction(function() use($client,$drawsRepository) {
		    $client->handle();
		    return $drawsRepository->update();
		});
	}
}
