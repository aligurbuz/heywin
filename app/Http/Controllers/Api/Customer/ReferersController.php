<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Referers\Create\CreateClient;
use App\Client\Customer\Referers\Get\GetClient;
use App\Client\Customer\Referers\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerReferersRepositoryContract;

class ReferersController extends ApiController
{
	/**
	 * get referers data
	 *
	 * @param GetClient $client
	 * @param CustomerReferersRepositoryContract $referersRepository
	 * @return array
	 */
	public function get(GetClient $client, CustomerReferersRepositoryContract $referersRepository): array
	{
		$client->handle();
		return $referersRepository->get();
	}


	/**
	 * create referers data
	 *
	 * @param CreateClient $client
	 * @param CustomerReferersRepositoryContract $referersRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CustomerReferersRepositoryContract $referersRepository): array|object
	{
		return $this->transaction(function() use($client,$referersRepository) {
		    $client->handle();
		    return $referersRepository->create();
		});
	}


	/**
	 * update referers data
	 *
	 * @param UpdateClient $client
	 * @param CustomerReferersRepositoryContract $referersRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CustomerReferersRepositoryContract $referersRepository): array|object
	{
		return $this->transaction(function() use($client,$referersRepository) {
		    $client->handle();
		    return $referersRepository->update();
		});
	}
}
