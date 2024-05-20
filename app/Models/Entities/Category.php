<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this category_code
 * @property $this created_at
 * @property $this created_by
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this id
 * @property $this is_deleted
 * @property $this name
 * @property $this parent
 * @property $this sequence
 * @property $this sequence_time
 * @property $this status
 * @property $this updated_at
 * @property $this updated_by
 */
class Category
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Category constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get category_code column for database table
	 *
	 * @return mixed
	 */
	protected static function category_code(): mixed
	{
		return self::$query->category_code;
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
	 * get name column for database table
	 *
	 * @return mixed
	 */
	protected static function name(): mixed
	{
		return self::$query->name;
	}


	/**
	 * get parent column for database table
	 *
	 * @return mixed
	 */
	protected static function parent(): mixed
	{
		return self::$query->parent;
	}


	/**
	 * get sequence column for database table
	 *
	 * @return mixed
	 */
	protected static function sequence(): mixed
	{
		return self::$query->sequence;
	}


	/**
	 * get sequence_time column for database table
	 *
	 * @return mixed
	 */
	protected static function sequence_time(): mixed
	{
		return self::$query->sequence_time;
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
