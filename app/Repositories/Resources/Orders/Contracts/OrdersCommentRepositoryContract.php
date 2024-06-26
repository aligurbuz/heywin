<?php 

namespace App\Repositories\Resources\Orders\Contracts;

use App\Models\Entities\OrderComment;
use App\Repositories\Resources\Orders\CommentRepository;

/**
 * @method $this id($id = null)
 * @method $this orderCommentCode($order_comment_code = null)
 * @method $this productCode($product_code = null)
 * @method $this orderCode($order_code = null)
 */
interface OrdersCommentRepositoryContract
{
	/**
	 * @return array
	 * @see CommentRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see CommentRepository::first()
	 */
	public function first(): array;


	/**
	 * @return OrderComment
	 * @see CommentRepository::entity()
	 */
	public function entity(): OrderComment;


	/**
	 * @param array $data
	 * @return array|object
	 * @see CommentRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see CommentRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see CommentRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see CommentRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see CommentRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see CommentRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see CommentRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see CommentRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see CommentRepository::code()
	 */
	public function code(int $code = 0): object;


	/**
	 * @param callable $callback
	 * @param mixed $tag
	 * @return array
	 */
	public function cache(mixed $tag, callable $callback): array;


	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see CommentRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see CommentRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
