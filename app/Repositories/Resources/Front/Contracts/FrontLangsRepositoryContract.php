<?php 

namespace App\Repositories\Resources\Front\Contracts;

use App\Models\Entities\FrontLang;
use App\Repositories\Resources\Front\LangsRepository;

/**
 * @method $this id($id = null)
 * @method $this frontLangCode($front_lang_code = null)
 * @method $this languageCode($language_code = null)
 */
interface FrontLangsRepositoryContract
{
	/**
	 * @return array
	 * @see LangsRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see LangsRepository::first()
	 */
	public function first(): array;


	/**
	 * @return FrontLang
	 * @see LangsRepository::entity()
	 */
	public function entity(): FrontLang;


	/**
	 * @param array $data
	 * @return array|object
	 * @see LangsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see LangsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see LangsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see LangsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see LangsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see LangsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see LangsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see LangsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see LangsRepository::code()
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
	 * @see LangsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see LangsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
