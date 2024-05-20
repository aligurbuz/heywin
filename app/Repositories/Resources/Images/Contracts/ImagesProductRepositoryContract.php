<?php 

namespace App\Repositories\Resources\Images\Contracts;

use App\Models\Entities\ProductImage;
use App\Repositories\Resources\Images\ProductRepository;

/**
 * @method $this id($id = null)
 * @method $this productImageCode($product_image_code = null)
 * @method $this productCode($product_code = null)
 */
interface ImagesProductRepositoryContract
{
	/**
	 * @return array
	 * @see ProductRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see ProductRepository::first()
	 */
	public function first(): array;


	/**
	 * @return ProductImage
	 * @see ProductRepository::entity()
	 */
	public function entity(): ProductImage;


	/**
	 * @param array $data
	 * @return array|object
	 * @see ProductRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ProductRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ProductRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ProductRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ProductRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ProductRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ProductRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ProductRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ProductRepository::code()
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
	 * @see ProductRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ProductRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
