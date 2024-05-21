<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this created_at
 * @property $this created_by
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this description
 * @property $this draw_code
 * @property $this draw_date
 * @property $this end_date
 * @property $this id
 * @property $this image_url
 * @property $this is_auto_draw
 * @property $this is_deleted
 * @property $this max_ticket
 * @property $this name
 * @property $this price
 * @property $this product_code
 * @property $this remaining_stock
 * @property $this start_date
 * @property $this status
 * @property $this stock
 * @property $this updated_at
 * @property $this updated_by
 * @property $this video_url
 * @property $this winner_count
 */
class Draw
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Draw constructor
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
	 * get description column for database table
	 *
	 * @return mixed
	 */
	protected static function description(): mixed
	{
		return self::$query->description;
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
	 * get draw_date column for database table
	 *
	 * @return mixed
	 */
	protected static function draw_date(): mixed
	{
		return self::$query->draw_date;
	}


	/**
	 * get end_date column for database table
	 *
	 * @return mixed
	 */
	protected static function end_date(): mixed
	{
		return self::$query->end_date;
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
	 * get image_url column for database table
	 *
	 * @return mixed
	 */
	protected static function image_url(): mixed
	{
		return self::$query->image_url;
	}


	/**
	 * get is_auto_draw column for database table
	 *
	 * @return mixed
	 */
	protected static function is_auto_draw(): mixed
	{
		return self::$query->is_auto_draw;
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
	 * get max_ticket column for database table
	 *
	 * @return mixed
	 */
	protected static function max_ticket(): mixed
	{
		return self::$query->max_ticket;
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
	 * get price column for database table
	 *
	 * @return mixed
	 */
	protected static function price(): mixed
	{
		return self::$query->price;
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
	 * get remaining_stock column for database table
	 *
	 * @return mixed
	 */
	protected static function remaining_stock(): mixed
	{
		return self::$query->remaining_stock;
	}


	/**
	 * get start_date column for database table
	 *
	 * @return mixed
	 */
	protected static function start_date(): mixed
	{
		return self::$query->start_date;
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
	 * get stock column for database table
	 *
	 * @return mixed
	 */
	protected static function stock(): mixed
	{
		return self::$query->stock;
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


	/**
	 * get video_url column for database table
	 *
	 * @return mixed
	 */
	protected static function video_url(): mixed
	{
		return self::$query->video_url;
	}


	/**
	 * get winner_count column for database table
	 *
	 * @return mixed
	 */
	protected static function winner_count(): mixed
	{
		return self::$query->winner_count;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
