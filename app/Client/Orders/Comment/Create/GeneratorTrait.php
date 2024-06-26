<?php 

namespace App\Client\Orders\Comment\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['order_comment_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['order_comment_code'];


	/**
	 * generates ordercomment_code for client
	 *
	 * @return int
	 */
	public function orderCommentCodeGenerator(): int
	{
		return generateHash();
	}
}
