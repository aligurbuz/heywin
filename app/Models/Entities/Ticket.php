<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this created_at
 * @property $this created_by
 * @property $this customer_code
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this draw_code
 * @property $this id
 * @property $this is_deleted
 * @property $this number
 * @property $this ticket_code
 * @property $this ticket_status
 * @property $this updated_at
 * @property $this updated_by
 */
class Ticket
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Ticket constructor
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
	 * get customer_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_code(): mixed
	{
		return self::$query->customer_code;
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
	 * get number column for database table
	 *
	 * @return mixed
	 */
	protected static function number(): mixed
	{
		return self::$query->number;
	}


	/**
	 * get ticket_code column for database table
	 *
	 * @return mixed
	 */
	protected static function ticket_code(): mixed
	{
		return self::$query->ticket_code;
	}


	/**
	 * get ticket_status column for database table
	 *
	 * @return mixed
	 */
	protected static function ticket_status(): mixed
	{
		return self::$query->ticket_status;
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
