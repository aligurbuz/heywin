<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\User;

use App\Models\UserCountry;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\User\Contracts\UserCountriesRepositoryContract;
use App\Repositories\Resources\User\Events\Countries\AfterCreate;
use App\Repositories\Resources\User\Events\Countries\AfterUpdate;
use App\Repositories\Resources\User\Events\Countries\BeforeCreate;
use App\Repositories\Resources\User\Events\Countries\BeforeUpdate;
use App\Repositories\Resources\User\Promoters\Countries\CountriesPromoterTrait;
use App\Repositories\Resources\User\PropertyHandlers\CountriesPropertyHandlerTrait;

class CountriesRepository extends EloquentRepository implements UserCountriesRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use CountriesPromoterTrait;
	use GeneralPromoterTrait;
	use CountriesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = UserCountry::class;
}
