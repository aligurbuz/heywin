<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Images;

use App\Client\Images\Slider\Create\CreateClient;
use App\Client\Images\Slider\Get\GetClient;
use App\Client\Images\Slider\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Images\Contracts\ImagesSliderRepositoryContract;

class SliderController extends ApiController
{
	/**
	 * get slider data
	 *
	 * @param GetClient $client
	 * @param ImagesSliderRepositoryContract $sliderRepository
	 * @return array
	 */
	public function get(GetClient $client, ImagesSliderRepositoryContract $sliderRepository): array
	{
		$client->handle();
		return $sliderRepository->get();
	}


	/**
	 * create slider data
	 *
	 * @param CreateClient $client
	 * @param ImagesSliderRepositoryContract $sliderRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, ImagesSliderRepositoryContract $sliderRepository): array|object
	{
		return $this->transaction(function() use($client,$sliderRepository) {
		    $client->handle();
		    return $sliderRepository->create();
		});
	}


	/**
	 * update slider data
	 *
	 * @param UpdateClient $client
	 * @param ImagesSliderRepositoryContract $sliderRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, ImagesSliderRepositoryContract $sliderRepository): array|object
	{
		return $this->transaction(function() use($client,$sliderRepository) {
		    $client->handle();
		    return $sliderRepository->update();
		});
	}
}
