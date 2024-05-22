<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Payment;

use App\Client\Payment\Types\Create\CreateClient;
use App\Client\Payment\Types\Get\GetClient;
use App\Client\Payment\Types\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Payment\Contracts\PaymentTypesRepositoryContract;

class TypesController extends ApiController
{
	/**
	 * get types data
	 *
	 * @param GetClient $client
	 * @param PaymentTypesRepositoryContract $typesRepository
	 * @return array
	 */
	public function get(GetClient $client, PaymentTypesRepositoryContract $typesRepository): array
	{
		$client->handle();
		return $typesRepository->get();
	}


	/**
	 * create types data
	 *
	 * @param CreateClient $client
	 * @param PaymentTypesRepositoryContract $typesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, PaymentTypesRepositoryContract $typesRepository): array|object
	{
		return $this->transaction(function() use($client,$typesRepository) {
		    $client->handle();
		    return $typesRepository->create();
		});
	}


	/**
	 * update types data
	 *
	 * @param UpdateClient $client
	 * @param PaymentTypesRepositoryContract $typesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, PaymentTypesRepositoryContract $typesRepository): array|object
	{
		return $this->transaction(function() use($client,$typesRepository) {
		    $client->handle();
		    return $typesRepository->update();
		});
	}
}
