<?php 

namespace App\Repositories\Resources\Customer\Contracts;

use App\Models\Entities\CustomerBalance;
use App\Repositories\Resources\Customer\BalancesRepository;

/**
 * @method $this id($id = null)
 * @method $this customerBalanceCode($customer_balance_code = null)
 * @method $this customerCode($customer_code = null)
 */
interface CustomerBalancesRepositoryContract
{
	/**
	 * @return array
	 * @see BalancesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see BalancesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return CustomerBalance
	 * @see BalancesRepository::entity()
	 */
	public function entity(): CustomerBalance;


	/**
	 * @param array $data
	 * @return array|object
	 * @see BalancesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see BalancesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see BalancesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see BalancesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see BalancesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see BalancesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see BalancesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see BalancesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see BalancesRepository::code()
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
	 * @see BalancesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see BalancesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
