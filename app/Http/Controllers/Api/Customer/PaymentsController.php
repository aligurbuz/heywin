<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Payments\Create\CreateClient;
use App\Client\Customer\Payments\Get\GetClient;
use App\Client\Customer\Payments\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerPaymentsRepositoryContract;

class PaymentsController extends ApiController
{
	/**
	 * get payments data
	 *
	 * @param GetClient $client
	 * @param CustomerPaymentsRepositoryContract $paymentsRepository
	 * @return array
	 */
	public function get(GetClient $client, CustomerPaymentsRepositoryContract $paymentsRepository): array
	{
		$client->handle();
		return $paymentsRepository->get();
	}


	/**
	 * create payments data
	 *
	 * @param CreateClient $client
	 * @param CustomerPaymentsRepositoryContract $paymentsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CustomerPaymentsRepositoryContract $paymentsRepository): array|object
	{
		return $this->transaction(function() use($client,$paymentsRepository) {
		    $client->handle();
		    return $paymentsRepository->create();
		});
	}


	/**
	 * update payments data
	 *
	 * @param UpdateClient $client
	 * @param CustomerPaymentsRepositoryContract $paymentsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CustomerPaymentsRepositoryContract $paymentsRepository): array|object
	{
		return $this->transaction(function() use($client,$paymentsRepository) {
		    $client->handle();
		    return $paymentsRepository->update();
		});
	}
}
