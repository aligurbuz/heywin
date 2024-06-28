<?php 

namespace App\Repositories\Resources\User\Contracts;

use App\Models\Entities\UserCountry;
use App\Repositories\Resources\User\CountriesRepository;

/**
 * @method $this id($id = null)
 * @method $this userCountryCode($user_country_code = null)
 * @method $this userCode($user_code = null)
 * @method $this countryCode($country_code = null)
 */
interface UserCountriesRepositoryContract
{
	/**
	 * @return array
	 * @see CountriesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see CountriesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return UserCountry
	 * @see CountriesRepository::entity()
	 */
	public function entity(): UserCountry;


	/**
	 * @param array $data
	 * @return array|object
	 * @see CountriesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see CountriesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see CountriesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see CountriesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see CountriesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see CountriesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see CountriesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see CountriesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see CountriesRepository::code()
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
	 * @see CountriesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see CountriesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
