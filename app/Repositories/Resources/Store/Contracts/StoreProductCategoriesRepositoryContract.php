<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\ProductCategory;
use App\Repositories\Resources\Store\ProductCategoriesRepository;

/**
 * @method $this id($id = null)
 * @method $this productCategoryCode($product_category_code = null)
 * @method $this productCode($product_code = null)
 * @method $this categoryCode($category_code = null)
 */
interface StoreProductCategoriesRepositoryContract
{
	/**
	 * @return array
	 * @see ProductCategoriesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see ProductCategoriesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return ProductCategory
	 * @see ProductCategoriesRepository::entity()
	 */
	public function entity(): ProductCategory;


	/**
	 * @param array $data
	 * @return array|object
	 * @see ProductCategoriesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ProductCategoriesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ProductCategoriesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ProductCategoriesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ProductCategoriesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ProductCategoriesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ProductCategoriesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ProductCategoriesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ProductCategoriesRepository::code()
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
	 * @see ProductCategoriesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ProductCategoriesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
