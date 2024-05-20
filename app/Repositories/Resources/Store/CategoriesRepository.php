<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\Category;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreCategoriesRepositoryContract;
use App\Repositories\Resources\Store\Events\Categories\AfterCreate;
use App\Repositories\Resources\Store\Events\Categories\AfterUpdate;
use App\Repositories\Resources\Store\Events\Categories\BeforeCreate;
use App\Repositories\Resources\Store\Events\Categories\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\Categories\CategoriesPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\CategoriesPropertyHandlerTrait;

class CategoriesRepository extends EloquentRepository implements StoreCategoriesRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use CategoriesPromoterTrait;
	use GeneralPromoterTrait;
	use CategoriesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Category::class;
}
