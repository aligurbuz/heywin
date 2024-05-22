<?php 

namespace App\Client\Payment\Types\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['payment_type_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['payment_type_code'];


	/**
	 * generates paymenttype_code for client
	 *
	 * @return int
	 */
	public function paymentTypeCodeGenerator(): int
	{
		return generateHash();
	}
}
