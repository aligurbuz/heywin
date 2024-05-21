<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this country_code
 * @property $this created_at
 * @property $this created_by
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this draw_code
 * @property $this draw_country_code
 * @property $this id
 * @property $this updated_at
 * @property $this updated_by
 */
class DrawCountry
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * DrawCountry constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get country_code column for database table
	 *
	 * @return mixed
	 */
	protected static function country_code(): mixed
	{
		return self::$query->country_code;
	}


	/**
	 * get created_at column for database table
	 *
	 * @return mixed
	 */
	protected static function created_at(): mixed
	{
		return self::$query->created_at;
	}


	/**
	 * get created_by column for database table
	 *
	 * @return mixed
	 */
	protected static function created_by(): mixed
	{
		return self::$query->created_by;
	}


	/**
	 * get deleted_at column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_at(): mixed
	{
		return self::$query->deleted_at;
	}


	/**
	 * get deleted_by column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_by(): mixed
	{
		return self::$query->deleted_by;
	}


	/**
	 * get draw_code column for database table
	 *
	 * @return mixed
	 */
	protected static function draw_code(): mixed
	{
		return self::$query->draw_code;
	}


	/**
	 * get draw_country_code column for database table
	 *
	 * @return mixed
	 */
	protected static function draw_country_code(): mixed
	{
		return self::$query->draw_country_code;
	}


	/**
	 * get id column for database table
	 *
	 * @return mixed
	 */
	protected static function id(): mixed
	{
		return self::$query->id;
	}


	/**
	 * get updated_at column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_at(): mixed
	{
		return self::$query->updated_at;
	}


	/**
	 * get updated_by column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_by(): mixed
	{
		return self::$query->updated_by;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
