<?php 

namespace App\Repositories\Resources\Orders\Contracts;

use App\Models\Entities\Order;
use App\Repositories\Resources\Orders\OrdersRepository;

/**
 * @method $this id($id = null)
 * @method $this orderCode($order_code = null)
 * @method $this customerCode($customer_code = null)
 */
interface OrdersRepositoryContract
{
	/**
	 * @return array
	 * @see OrdersRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see OrdersRepository::first()
	 */
	public function first(): array;


	/**
	 * @return Order
	 * @see OrdersRepository::entity()
	 */
	public function entity(): Order;


	/**
	 * @param array $data
	 * @return array|object
	 * @see OrdersRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see OrdersRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see OrdersRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see OrdersRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see OrdersRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see OrdersRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see OrdersRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see OrdersRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see OrdersRepository::code()
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
	 * @see OrdersRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see OrdersRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
