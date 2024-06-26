<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Orders;

use App\Models\OrderComment;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Orders\Contracts\OrdersCommentRepositoryContract;
use App\Repositories\Resources\Orders\Events\Comment\AfterCreate;
use App\Repositories\Resources\Orders\Events\Comment\AfterUpdate;
use App\Repositories\Resources\Orders\Events\Comment\BeforeCreate;
use App\Repositories\Resources\Orders\Events\Comment\BeforeUpdate;
use App\Repositories\Resources\Orders\Promoters\Comment\CommentPromoterTrait;
use App\Repositories\Resources\Orders\PropertyHandlers\CommentPropertyHandlerTrait;

class CommentRepository extends EloquentRepository implements OrdersCommentRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use CommentPromoterTrait;
	use GeneralPromoterTrait;
	use CommentPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = OrderComment::class;
}
