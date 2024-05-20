<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\Category;
use App\Repositories\Resources\Store\CategoriesRepository;

/**
 * @method $this id($id = null)
 * @method $this categoryCode($category_code = null)
 */
interface StoreCategoriesRepositoryContract
{
	/**
	 * @return array
	 * @see CategoriesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see CategoriesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return Category
	 * @see CategoriesRepository::entity()
	 */
	public function entity(): Category;


	/**
	 * @param array $data
	 * @return array|object
	 * @see CategoriesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see CategoriesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see CategoriesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see CategoriesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see CategoriesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see CategoriesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see CategoriesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see CategoriesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see CategoriesRepository::code()
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
	 * @see CategoriesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see CategoriesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
