<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this created_at
 * @property $this created_by
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this id
 * @property $this image
 * @property $this is_deleted
 * @property $this product_code
 * @property $this product_image_code
 * @property $this status
 * @property $this updated_at
 * @property $this updated_by
 */
class ProductImage
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * ProductImage constructor
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
	 * get id column for database table
	 *
	 * @return mixed
	 */
	protected static function id(): mixed
	{
		return self::$query->id;
	}


	/**
	 * get image column for database table
	 *
	 * @return mixed
	 */
	protected static function image(): mixed
	{
		return self::$query->image;
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
	 * get product_code column for database table
	 *
	 * @return mixed
	 */
	protected static function product_code(): mixed
	{
		return self::$query->product_code;
	}


	/**
	 * get product_image_code column for database table
	 *
	 * @return mixed
	 */
	protected static function product_image_code(): mixed
	{
		return self::$query->product_image_code;
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
