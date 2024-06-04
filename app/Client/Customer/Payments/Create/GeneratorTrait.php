<?php 

namespace App\Client\Customer\Payments\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['customer_payment_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['customer_payment_code'];


	/**
	 * generates customerpayment_code for client
	 *
	 * @return int
	 */
	public function customerPaymentCodeGenerator(): int
	{
		return generateHash();
	}
}
