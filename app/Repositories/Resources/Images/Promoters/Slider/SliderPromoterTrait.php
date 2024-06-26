<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Images\Promoters\Slider;

use App\Models\Entities\Slider;

trait SliderPromoterTrait
{
	/**
	 * get auto SliderRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function sliderRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Slider
	 */
	public function entity(): Slider
	{
		return parent::entity();
	}


	/**
	 * Appends to the end of the returned data.
	 *
	 * @return array
	 */
	public function appends(): array
	{
		return [];
	}
}
