<?php 

namespace App\Repositories\Resources\Images\Contracts;

use App\Models\Entities\Slider;
use App\Repositories\Resources\Images\SliderRepository;

/**
 * @method $this id($id = null)
 * @method $this sliderCode($slider_code = null)
 * @method $this drawCode($draw_code = null)
 */
interface ImagesSliderRepositoryContract
{
	/**
	 * @return array
	 * @see SliderRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see SliderRepository::first()
	 */
	public function first(): array;


	/**
	 * @return Slider
	 * @see SliderRepository::entity()
	 */
	public function entity(): Slider;


	/**
	 * @param array $data
	 * @return array|object
	 * @see SliderRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see SliderRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see SliderRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see SliderRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see SliderRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see SliderRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see SliderRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see SliderRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see SliderRepository::code()
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
	 * @see SliderRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see SliderRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
