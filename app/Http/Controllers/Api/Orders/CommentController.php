<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Orders;

use App\Client\Orders\Comment\Create\CreateClient;
use App\Client\Orders\Comment\Get\GetClient;
use App\Client\Orders\Comment\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Orders\Contracts\OrdersCommentRepositoryContract;

class CommentController extends ApiController
{
	/**
	 * get comment data
	 *
	 * @param GetClient $client
	 * @param OrdersCommentRepositoryContract $commentRepository
	 * @return array
	 */
	public function get(GetClient $client, OrdersCommentRepositoryContract $commentRepository): array
	{
		$client->handle();
		return $commentRepository->get();
	}


	/**
	 * create comment data
	 *
	 * @param CreateClient $client
	 * @param OrdersCommentRepositoryContract $commentRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, OrdersCommentRepositoryContract $commentRepository): array|object
	{
		return $this->transaction(function() use($client,$commentRepository) {
		    $client->handle();
		    return $commentRepository->create();
		});
	}


	/**
	 * update comment data
	 *
	 * @param UpdateClient $client
	 * @param OrdersCommentRepositoryContract $commentRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, OrdersCommentRepositoryContract $commentRepository): array|object
	{
		return $this->transaction(function() use($client,$commentRepository) {
		    $client->handle();
		    return $commentRepository->update();
		});
	}
}
