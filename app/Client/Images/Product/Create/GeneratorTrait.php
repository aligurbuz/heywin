<?php 

namespace App\Client\Images\Product\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['product_image_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['product_image_code'];


	/**
	 * generates productimage_code for client
	 *
	 * @return int
	 */
	public function productImageCodeGenerator(): int
	{
		return generateHash();
	}
}
