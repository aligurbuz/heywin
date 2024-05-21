<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\Ticket;
use App\Repositories\Resources\Store\DrawTicketsRepository;

/**
 * @method $this id($id = null)
 * @method $this ticketCode($ticket_code = null)
 * @method $this drawCode($draw_code = null)
 * @method $this customerCode($customer_code = null)
 */
interface StoreDrawTicketsRepositoryContract
{
	/**
	 * @return array
	 * @see DrawTicketsRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see DrawTicketsRepository::first()
	 */
	public function first(): array;


	/**
	 * @return Ticket
	 * @see DrawTicketsRepository::entity()
	 */
	public function entity(): Ticket;


	/**
	 * @param array $data
	 * @return array|object
	 * @see DrawTicketsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see DrawTicketsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see DrawTicketsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see DrawTicketsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see DrawTicketsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see DrawTicketsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see DrawTicketsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see DrawTicketsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see DrawTicketsRepository::code()
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
	 * @see DrawTicketsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see DrawTicketsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
