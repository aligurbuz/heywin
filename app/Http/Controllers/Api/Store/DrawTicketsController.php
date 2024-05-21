<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\DrawTickets\Create\CreateClient;
use App\Client\Store\DrawTickets\Get\GetClient;
use App\Client\Store\DrawTickets\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreDrawTicketsRepositoryContract;

class DrawTicketsController extends ApiController
{
	/**
	 * get drawTickets data
	 *
	 * @param GetClient $client
	 * @param StoreDrawTicketsRepositoryContract $drawTicketsRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreDrawTicketsRepositoryContract $drawTicketsRepository): array
	{
		$client->handle();
		return $drawTicketsRepository->get();
	}


	/**
	 * create drawTickets data
	 *
	 * @param CreateClient $client
	 * @param StoreDrawTicketsRepositoryContract $drawTicketsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, StoreDrawTicketsRepositoryContract $drawTicketsRepository): array|object
	{
		return $this->transaction(function() use($client,$drawTicketsRepository) {
		    $client->handle();
		    return $drawTicketsRepository->create();
		});
	}


	/**
	 * update drawTickets data
	 *
	 * @param UpdateClient $client
	 * @param StoreDrawTicketsRepositoryContract $drawTicketsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, StoreDrawTicketsRepositoryContract $drawTicketsRepository): array|object
	{
		return $this->transaction(function() use($client,$drawTicketsRepository) {
		    $client->handle();
		    return $drawTicketsRepository->update();
		});
	}
}
