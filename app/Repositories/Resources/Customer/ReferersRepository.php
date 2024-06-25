<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\CustomerReferer;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerReferersRepositoryContract;
use App\Repositories\Resources\Customer\Events\Referers\AfterCreate;
use App\Repositories\Resources\Customer\Events\Referers\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Referers\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Referers\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Referers\ReferersPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\ReferersPropertyHandlerTrait;

class ReferersRepository extends EloquentRepository implements CustomerReferersRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use ReferersPromoterTrait;
	use GeneralPromoterTrait;
	use ReferersPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = CustomerReferer::class;
}
