<?php 

namespace App\Repositories\Resources\Payment\Contracts;

use App\Models\Entities\PaymentType;
use App\Repositories\Resources\Payment\TypesRepository;

/**
 * @method $this id($id = null)
 * @method $this paymentTypeCode($payment_type_code = null)
 */
interface PaymentTypesRepositoryContract
{
	/**
	 * @return array
	 * @see TypesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see TypesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return PaymentType
	 * @see TypesRepository::entity()
	 */
	public function entity(): PaymentType;


	/**
	 * @param array $data
	 * @return array|object
	 * @see TypesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see TypesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see TypesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see TypesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see TypesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see TypesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see TypesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see TypesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see TypesRepository::code()
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
	 * @see TypesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see TypesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
