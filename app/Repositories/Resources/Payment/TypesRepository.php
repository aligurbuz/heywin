<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Payment;

use App\Models\PaymentType;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Payment\Contracts\PaymentTypesRepositoryContract;
use App\Repositories\Resources\Payment\Events\Types\AfterCreate;
use App\Repositories\Resources\Payment\Events\Types\AfterUpdate;
use App\Repositories\Resources\Payment\Events\Types\BeforeCreate;
use App\Repositories\Resources\Payment\Events\Types\BeforeUpdate;
use App\Repositories\Resources\Payment\Promoters\Types\TypesPromoterTrait;
use App\Repositories\Resources\Payment\PropertyHandlers\TypesPropertyHandlerTrait;

class TypesRepository extends EloquentRepository implements PaymentTypesRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use TypesPromoterTrait;
	use GeneralPromoterTrait;
	use TypesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = PaymentType::class;
}
