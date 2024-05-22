<?php 

namespace App\Client\Customer\Balances\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['customer_balance_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['customer_balance_code'];


	/**
	 * generates customerbalance_code for client
	 *
	 * @return int
	 */
	public function customerBalanceCodeGenerator(): int
	{
		return generateHash();
	}
}
