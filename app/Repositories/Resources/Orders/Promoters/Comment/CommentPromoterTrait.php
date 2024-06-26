<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Orders\Promoters\Comment;

use App\Models\Entities\OrderComment;

trait CommentPromoterTrait
{
	/**
	 * get auto CommentRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function commentRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return OrderComment
	 */
	public function entity(): OrderComment
	{
		return parent::entity();
	}


	/**
	 * Appends to the end of the returned data.
	 *
	 * @return array
	 */
	public function appends(): array
	{
		return [];
	}
}
