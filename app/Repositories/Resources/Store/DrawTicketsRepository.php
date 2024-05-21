<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\Ticket;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreDrawTicketsRepositoryContract;
use App\Repositories\Resources\Store\Events\DrawTickets\AfterCreate;
use App\Repositories\Resources\Store\Events\DrawTickets\AfterUpdate;
use App\Repositories\Resources\Store\Events\DrawTickets\BeforeCreate;
use App\Repositories\Resources\Store\Events\DrawTickets\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\DrawTickets\DrawTicketsPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\DrawTicketsPropertyHandlerTrait;

class DrawTicketsRepository extends EloquentRepository implements StoreDrawTicketsRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use DrawTicketsPromoterTrait;
	use GeneralPromoterTrait;
	use DrawTicketsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Ticket::class;
}
