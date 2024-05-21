<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\Draw;
use App\Repositories\Resources\Store\DrawsRepository;

/**
 * @method $this id($id = null)
 * @method $this drawCode($draw_code = null)
 * @method $this startDate($start_date = null)
 * @method $this endDate($end_date = null)
 * @method $this drawDate($draw_date = null)
 * @method $this stock($stock = null)
 * @method $this productCode($product_code = null)
 */
interface StoreDrawsRepositoryContract
{
	/**
	 * @return array
	 * @see DrawsRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see DrawsRepository::first()
	 */
	public function first(): array;


	/**
	 * @return Draw
	 * @see DrawsRepository::entity()
	 */
	public function entity(): Draw;


	/**
	 * @param array $data
	 * @return array|object
	 * @see DrawsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see DrawsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see DrawsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see DrawsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see DrawsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see DrawsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see DrawsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see DrawsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see DrawsRepository::code()
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
	 * @see DrawsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see DrawsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
