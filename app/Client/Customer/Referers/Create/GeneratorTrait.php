<?php 

namespace App\Client\Customer\Referers\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['customer_referer_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['customer_referer_code'];


	/**
	 * generates customerreferer_code for client
	 *
	 * @return int
	 */
	public function customerRefererCodeGenerator(): int
	{
		return generateHash();
	}
}
