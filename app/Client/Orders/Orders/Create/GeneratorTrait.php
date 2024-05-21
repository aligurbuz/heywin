<?php 

namespace App\Client\Orders\Orders\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['order_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['order_code'];


	/**
	 * generates order_code for client
	 *
	 * @return int
	 */
	public function orderCodeGenerator(): int
	{
		return generateHash();
	}
}
