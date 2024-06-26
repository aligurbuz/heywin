<?php 

namespace App\Client\Images\Slider\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['slider_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['slider_code'];


	/**
	 * generates slider_code for client
	 *
	 * @return int
	 */
	public function sliderCodeGenerator(): int
	{
		return generateHash();
	}
}
