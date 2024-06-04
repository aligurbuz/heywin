<?php 

namespace App\Repositories\Resources\Customer\Contracts;

use App\Models\Entities\CustomerPayment;
use App\Repositories\Resources\Customer\PaymentsRepository;

/**
 * @method $this id($id = null)
 * @method $this customerPaymentCode($customer_payment_code = null)
 */
interface CustomerPaymentsRepositoryContract
{
	/**
	 * @return array
	 * @see PaymentsRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see PaymentsRepository::first()
	 */
	public function first(): array;


	/**
	 * @return CustomerPayment
	 * @see PaymentsRepository::entity()
	 */
	public function entity(): CustomerPayment;


	/**
	 * @param array $data
	 * @return array|object
	 * @see PaymentsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see PaymentsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see PaymentsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see PaymentsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see PaymentsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see PaymentsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see PaymentsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see PaymentsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see PaymentsRepository::code()
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
	 * @see PaymentsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see PaymentsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
