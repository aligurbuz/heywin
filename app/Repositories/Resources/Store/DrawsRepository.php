<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\Draw;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreDrawsRepositoryContract;
use App\Repositories\Resources\Store\Events\Draws\AfterCreate;
use App\Repositories\Resources\Store\Events\Draws\AfterUpdate;
use App\Repositories\Resources\Store\Events\Draws\BeforeCreate;
use App\Repositories\Resources\Store\Events\Draws\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\Draws\DrawsPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\DrawsPropertyHandlerTrait;

class DrawsRepository extends EloquentRepository implements StoreDrawsRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use DrawsPromoterTrait;
	use GeneralPromoterTrait;
	use DrawsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Draw::class;
}
