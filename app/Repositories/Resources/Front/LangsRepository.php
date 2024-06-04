<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Front;

use App\Models\FrontLang;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Front\Contracts\FrontLangsRepositoryContract;
use App\Repositories\Resources\Front\Events\Langs\AfterCreate;
use App\Repositories\Resources\Front\Events\Langs\AfterUpdate;
use App\Repositories\Resources\Front\Events\Langs\BeforeCreate;
use App\Repositories\Resources\Front\Events\Langs\BeforeUpdate;
use App\Repositories\Resources\Front\Promoters\Langs\LangsPromoterTrait;
use App\Repositories\Resources\Front\PropertyHandlers\LangsPropertyHandlerTrait;

class LangsRepository extends EloquentRepository implements FrontLangsRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use LangsPromoterTrait;
	use GeneralPromoterTrait;
	use LangsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = FrontLang::class;
}
