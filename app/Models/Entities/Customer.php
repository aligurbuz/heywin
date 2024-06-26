<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this balance
 * @property $this created_at
 * @property $this customer_code
 * @property $this email
 * @property $this email_verified_at
 * @property $this id
 * @property $this is_deleted
 * @property $this name
 * @property $this password
 * @property $this remember_token
 * @property $this status
 * @property $this updated_at
 */
class Customer
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Customer constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get balance column for database table
	 *
	 * @return mixed
	 */
	protected static function balance(): mixed
	{
		return self::$query->balance;
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
	 * get customer_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_code(): mixed
	{
		return self::$query->customer_code;
	}


	/**
	 * get email column for database table
	 *
	 * @return mixed
	 */
	protected static function email(): mixed
	{
		return self::$query->email;
	}


	/**
	 * get email_verified_at column for database table
	 *
	 * @return mixed
	 */
	protected static function email_verified_at(): mixed
	{
		return self::$query->email_verified_at;
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
	 * get password column for database table
	 *
	 * @return mixed
	 */
	protected static function password(): mixed
	{
		return self::$query->password;
	}


	/**
	 * get remember_token column for database table
	 *
	 * @return mixed
	 */
	protected static function remember_token(): mixed
	{
		return self::$query->remember_token;
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


	public function __get($name)
	{
		return static::{$name}();
	}
}
