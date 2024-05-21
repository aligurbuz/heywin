<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Orders;

use App\Client\Orders\Orders\Create\CreateClient;
use App\Client\Orders\Orders\Get\GetClient;
use App\Client\Orders\Orders\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Orders\Contracts\OrdersRepositoryContract;

class OrdersController extends ApiController
{
	/**
	 * get orders data
	 *
	 * @param GetClient $client
	 * @param OrdersRepositoryContract $ordersRepository
	 * @return array
	 */
	public function get(GetClient $client, OrdersRepositoryContract $ordersRepository): array
	{
		$client->handle();
		return $ordersRepository->get();
	}


	/**
	 * create orders data
	 *
	 * @param CreateClient $client
	 * @param OrdersRepositoryContract $ordersRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, OrdersRepositoryContract $ordersRepository): array|object
	{
		return $this->transaction(function() use($client,$ordersRepository) {
		    $client->handle();
		    return $ordersRepository->create();
		});
	}


	/**
	 * update orders data
	 *
	 * @param UpdateClient $client
	 * @param OrdersRepositoryContract $ordersRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, OrdersRepositoryContract $ordersRepository): array|object
	{
		return $this->transaction(function() use($client,$ordersRepository) {
		    $client->handle();
		    return $ordersRepository->update();
		});
	}
}
