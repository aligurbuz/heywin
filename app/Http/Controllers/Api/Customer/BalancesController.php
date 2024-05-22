<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Balances\Create\CreateClient;
use App\Client\Customer\Balances\Get\GetClient;
use App\Client\Customer\Balances\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerBalancesRepositoryContract;

class BalancesController extends ApiController
{
	/**
	 * get balances data
	 *
	 * @param GetClient $client
	 * @param CustomerBalancesRepositoryContract $balancesRepository
	 * @return array
	 */
	public function get(GetClient $client, CustomerBalancesRepositoryContract $balancesRepository): array
	{
		$client->handle();
		return $balancesRepository->get();
	}


	/**
	 * create balances data
	 *
	 * @param CreateClient $client
	 * @param CustomerBalancesRepositoryContract $balancesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CustomerBalancesRepositoryContract $balancesRepository): array|object
	{
		return $this->transaction(function() use($client,$balancesRepository) {
		    $client->handle();
		    return $balancesRepository->create();
		});
	}


	/**
	 * update balances data
	 *
	 * @param UpdateClient $client
	 * @param CustomerBalancesRepositoryContract $balancesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CustomerBalancesRepositoryContract $balancesRepository): array|object
	{
		return $this->transaction(function() use($client,$balancesRepository) {
		    $client->handle();
		    return $balancesRepository->update();
		});
	}
}
