<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Images;

use App\Models\ProductImage;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Images\Contracts\ImagesProductRepositoryContract;
use App\Repositories\Resources\Images\Events\Product\AfterCreate;
use App\Repositories\Resources\Images\Events\Product\AfterUpdate;
use App\Repositories\Resources\Images\Events\Product\BeforeCreate;
use App\Repositories\Resources\Images\Events\Product\BeforeUpdate;
use App\Repositories\Resources\Images\Promoters\Product\ProductPromoterTrait;
use App\Repositories\Resources\Images\PropertyHandlers\ProductPropertyHandlerTrait;

class ProductRepository extends EloquentRepository implements ImagesProductRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use ProductPromoterTrait;
	use GeneralPromoterTrait;
	use ProductPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = ProductImage::class;
}
