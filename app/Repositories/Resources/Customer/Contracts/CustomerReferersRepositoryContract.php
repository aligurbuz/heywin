<?php 

namespace App\Repositories\Resources\Customer\Contracts;

use App\Models\Entities\CustomerReferer;
use App\Repositories\Resources\Customer\ReferersRepository;

/**
 * @method $this id($id = null)
 * @method $this customerRefererCode($customer_referer_code = null)
 * @method $this customerCode($customer_code = null)
 * @method $this customerFriendCode($customer_friend_code = null)
 */
interface CustomerReferersRepositoryContract
{
	/**
	 * @return array
	 * @see ReferersRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see ReferersRepository::first()
	 */
	public function first(): array;


	/**
	 * @return CustomerReferer
	 * @see ReferersRepository::entity()
	 */
	public function entity(): CustomerReferer;


	/**
	 * @param array $data
	 * @return array|object
	 * @see ReferersRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ReferersRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ReferersRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ReferersRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ReferersRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ReferersRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ReferersRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ReferersRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ReferersRepository::code()
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
	 * @see ReferersRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ReferersRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
