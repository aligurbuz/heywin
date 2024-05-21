<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\DrawCountry;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreDrawCountriesRepositoryContract;
use App\Repositories\Resources\Store\Events\DrawCountries\AfterCreate;
use App\Repositories\Resources\Store\Events\DrawCountries\AfterUpdate;
use App\Repositories\Resources\Store\Events\DrawCountries\BeforeCreate;
use App\Repositories\Resources\Store\Events\DrawCountries\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\DrawCountries\DrawCountriesPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\DrawCountriesPropertyHandlerTrait;

class DrawCountriesRepository extends EloquentRepository implements StoreDrawCountriesRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use DrawCountriesPromoterTrait;
	use GeneralPromoterTrait;
	use DrawCountriesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = DrawCountry::class;
}
