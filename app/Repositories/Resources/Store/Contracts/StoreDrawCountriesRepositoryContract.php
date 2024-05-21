<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\DrawCountry;
use App\Repositories\Resources\Store\DrawCountriesRepository;

/**
 * @method $this id($id = null)
 * @method $this drawCountryCode($draw_country_code = null)
 * @method $this drawCode($draw_code = null)
 * @method $this countryCode($country_code = null)
 */
interface StoreDrawCountriesRepositoryContract
{
	/**
	 * @return array
	 * @see DrawCountriesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see DrawCountriesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return DrawCountry
	 * @see DrawCountriesRepository::entity()
	 */
	public function entity(): DrawCountry;


	/**
	 * @param array $data
	 * @return array|object
	 * @see DrawCountriesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see DrawCountriesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see DrawCountriesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see DrawCountriesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see DrawCountriesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see DrawCountriesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see DrawCountriesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see DrawCountriesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see DrawCountriesRepository::code()
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
	 * @see DrawCountriesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see DrawCountriesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
