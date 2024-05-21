<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Orders;

use App\Models\Order;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Orders\Contracts\OrdersRepositoryContract;
use App\Repositories\Resources\Orders\Events\Orders\AfterCreate;
use App\Repositories\Resources\Orders\Events\Orders\AfterUpdate;
use App\Repositories\Resources\Orders\Events\Orders\BeforeCreate;
use App\Repositories\Resources\Orders\Events\Orders\BeforeUpdate;
use App\Repositories\Resources\Orders\Promoters\Orders\OrdersPromoterTrait;
use App\Repositories\Resources\Orders\PropertyHandlers\OrdersPropertyHandlerTrait;

class OrdersRepository extends EloquentRepository implements OrdersRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use OrdersPromoterTrait;
	use GeneralPromoterTrait;
	use OrdersPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Order::class;
}
