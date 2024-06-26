<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this amount
 * @property $this created_at
 * @property $this created_by
 * @property $this currency_code
 * @property $this customer_payment_code
 * @property $this data
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this id
 * @property $this is_deleted
 * @property $this status
 * @property $this updated_at
 * @property $this updated_by
 */
class CustomerPayment
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * CustomerPayment constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get amount column for database table
	 *
	 * @return mixed
	 */
	protected static function amount(): mixed
	{
		return self::$query->amount;
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
	 * get currency_code column for database table
	 *
	 * @return mixed
	 */
	protected static function currency_code(): mixed
	{
		return self::$query->currency_code;
	}


	/**
	 * get customer_payment_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_payment_code(): mixed
	{
		return self::$query->customer_payment_code;
	}


	/**
	 * get data column for database table
	 *
	 * @return mixed
	 */
	protected static function data(): mixed
	{
		return self::$query->data;
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
