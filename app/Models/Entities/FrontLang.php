<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this created_at
 * @property $this created_by
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this front_lang_code
 * @property $this id
 * @property $this is_deleted
 * @property $this lang_key
 * @property $this lang_value
 * @property $this language_code
 * @property $this status
 * @property $this updated_at
 * @property $this updated_by
 */
class FrontLang
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * FrontLang constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
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
	 * get front_lang_code column for database table
	 *
	 * @return mixed
	 */
	protected static function front_lang_code(): mixed
	{
		return self::$query->front_lang_code;
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
	 * get is_deleted column for database table
	 *
	 * @return mixed
	 */
	protected static function is_deleted(): mixed
	{
		return self::$query->is_deleted;
	}


	/**
	 * get lang_key column for database table
	 *
	 * @return mixed
	 */
	protected static function lang_key(): mixed
	{
		return self::$query->lang_key;
	}


	/**
	 * get lang_value column for database table
	 *
	 * @return mixed
	 */
	protected static function lang_value(): mixed
	{
		return self::$query->lang_value;
	}


	/**
	 * get language_code column for database table
	 *
	 * @return mixed
	 */
	protected static function language_code(): mixed
	{
		return self::$query->language_code;
	}


	/**
	 * get status column for database table
	 *
	 * @return mixed
	 */
	protected static function status(): mixed
	{
		return self::$query->status;
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
