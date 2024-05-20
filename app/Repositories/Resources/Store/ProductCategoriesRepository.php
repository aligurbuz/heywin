<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\ProductCategory;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreProductCategoriesRepositoryContract;
use App\Repositories\Resources\Store\Events\ProductCategories\AfterCreate;
use App\Repositories\Resources\Store\Events\ProductCategories\AfterUpdate;
use App\Repositories\Resources\Store\Events\ProductCategories\BeforeCreate;
use App\Repositories\Resources\Store\Events\ProductCategories\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\ProductCategories\ProductCategoriesPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\ProductCategoriesPropertyHandlerTrait;

class ProductCategoriesRepository extends EloquentRepository implements StoreProductCategoriesRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use ProductCategoriesPromoterTrait;
	use GeneralPromoterTrait;
	use ProductCategoriesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = ProductCategory::class;
}
