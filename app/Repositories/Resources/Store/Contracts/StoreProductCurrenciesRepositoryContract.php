<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\ProductCurrency;
use App\Repositories\Resources\Store\ProductCurrenciesRepository;

/**
 * @method $this id($id = null)
 * @method $this productCurrencyCode($product_currency_code = null)
 * @method $this productCode($product_code = null)
 * @method $this currencyCode($currency_code = null)
 */
interface StoreProductCurrenciesRepositoryContract
{
	/**
	 * @return array
	 * @see ProductCurrenciesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see ProductCurrenciesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return ProductCurrency
	 * @see ProductCurrenciesRepository::entity()
	 */
	public function entity(): ProductCurrency;


	/**
	 * @param array $data
	 * @return array|object
	 * @see ProductCurrenciesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ProductCurrenciesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ProductCurrenciesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ProductCurrenciesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ProductCurrenciesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ProductCurrenciesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ProductCurrenciesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ProductCurrenciesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ProductCurrenciesRepository::code()
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
	 * @see ProductCurrenciesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ProductCurrenciesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
