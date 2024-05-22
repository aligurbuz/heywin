<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\CustomerBalance;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerBalancesRepositoryContract;
use App\Repositories\Resources\Customer\Events\Balances\AfterCreate;
use App\Repositories\Resources\Customer\Events\Balances\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Balances\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Balances\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Balances\BalancesPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\BalancesPropertyHandlerTrait;

class BalancesRepository extends EloquentRepository implements CustomerBalancesRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use BalancesPromoterTrait;
	use GeneralPromoterTrait;
	use BalancesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = CustomerBalance::class;
}
