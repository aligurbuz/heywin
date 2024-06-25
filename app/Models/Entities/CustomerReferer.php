<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this customer_referer_code
 * @property $this customer_code
 * @property $this customer_friend_code
 * @property $this level
 * @property $this percent
 * @property $this gain
 * @property $this status
 * @property $this is_deleted
 * @property $this created_by
 * @property $this updated_by
 * @property $this deleted_by
 * @property $this deleted_at
 * @property $this created_at
 * @property $this updated_at
 */
class CustomerReferer
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * CustomerReferer constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
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
	 * get customer_referer_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_referer_code(): mixed
	{
		return self::$query->customer_referer_code;
	}


	/**
	 * get customer_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_code(): mixed
	{
		return self::$query->customer_code;
	}


	/**
	 * get customer_friend_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_friend_code(): mixed
	{
		return self::$query->customer_friend_code;
	}


	/**
	 * get level column for database table
	 *
	 * @return mixed
	 */
	protected static function level(): mixed
	{
		return self::$query->level;
	}


	/**
	 * get percent column for database table
	 *
	 * @return mixed
	 */
	protected static function percent(): mixed
	{
		return self::$query->percent;
	}


	/**
	 * get gain column for database table
	 *
	 * @return mixed
	 */
	protected static function gain(): mixed
	{
		return self::$query->gain;
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
	 * get is_deleted column for database table
	 *
	 * @return mixed
	 */
	protected static function is_deleted(): mixed
	{
		return self::$query->is_deleted;
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
	 * get updated_by column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_by(): mixed
	{
		return self::$query->updated_by;
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
	 * get deleted_at column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_at(): mixed
	{
		return self::$query->deleted_at;
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
	 * get updated_at column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_at(): mixed
	{
		return self::$query->updated_at;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
