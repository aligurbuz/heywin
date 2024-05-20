<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Images;

use App\Client\Images\Product\Create\CreateClient;
use App\Client\Images\Product\Get\GetClient;
use App\Client\Images\Product\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Images\Contracts\ImagesProductRepositoryContract;

class ProductController extends ApiController
{
	/**
	 * get product data
	 *
	 * @param GetClient $client
	 * @param ImagesProductRepositoryContract $productRepository
	 * @return array
	 */
	public function get(GetClient $client, ImagesProductRepositoryContract $productRepository): array
	{
		$client->handle();
		return $productRepository->get();
	}


	/**
	 * create product data
	 *
	 * @param CreateClient $client
	 * @param ImagesProductRepositoryContract $productRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, ImagesProductRepositoryContract $productRepository): array|object
	{
		return $this->transaction(function() use($client,$productRepository) {
		    $client->handle();
		    return $productRepository->create();
		});
	}


	/**
	 * update product data
	 *
	 * @param UpdateClient $client
	 * @param ImagesProductRepositoryContract $productRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, ImagesProductRepositoryContract $productRepository): array|object
	{
		return $this->transaction(function() use($client,$productRepository) {
		    $client->handle();
		    return $productRepository->update();
		});
	}
}
