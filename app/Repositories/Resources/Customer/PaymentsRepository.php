<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\CustomerPayment;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerPaymentsRepositoryContract;
use App\Repositories\Resources\Customer\Events\Payments\AfterCreate;
use App\Repositories\Resources\Customer\Events\Payments\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Payments\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Payments\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Payments\PaymentsPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\PaymentsPropertyHandlerTrait;

class PaymentsRepository extends EloquentRepository implements CustomerPaymentsRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use PaymentsPromoterTrait;
	use GeneralPromoterTrait;
	use PaymentsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = CustomerPayment::class;
}
