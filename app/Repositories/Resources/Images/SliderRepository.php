<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Images;

use App\Models\Slider;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Images\Contracts\ImagesSliderRepositoryContract;
use App\Repositories\Resources\Images\Events\Slider\AfterCreate;
use App\Repositories\Resources\Images\Events\Slider\AfterUpdate;
use App\Repositories\Resources\Images\Events\Slider\BeforeCreate;
use App\Repositories\Resources\Images\Events\Slider\BeforeUpdate;
use App\Repositories\Resources\Images\Promoters\Slider\SliderPromoterTrait;
use App\Repositories\Resources\Images\PropertyHandlers\SliderPropertyHandlerTrait;

class SliderRepository extends EloquentRepository implements ImagesSliderRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use SliderPromoterTrait;
	use GeneralPromoterTrait;
	use SliderPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Slider::class;
}
