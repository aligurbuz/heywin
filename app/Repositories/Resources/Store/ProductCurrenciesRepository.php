<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\ProductCurrency;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreProductCurrenciesRepositoryContract;
use App\Repositories\Resources\Store\Events\ProductCurrencies\AfterCreate;
use App\Repositories\Resources\Store\Events\ProductCurrencies\AfterUpdate;
use App\Repositories\Resources\Store\Events\ProductCurrencies\BeforeCreate;
use App\Repositories\Resources\Store\Events\ProductCurrencies\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\ProductCurrencies\ProductCurrenciesPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\ProductCurrenciesPropertyHandlerTrait;

class ProductCurrenciesRepository extends EloquentRepository implements StoreProductCurrenciesRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use ProductCurrenciesPromoterTrait;
	use GeneralPromoterTrait;
	use ProductCurrenciesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = ProductCurrency::class;
}
