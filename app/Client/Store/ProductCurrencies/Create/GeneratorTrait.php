<?php 

namespace App\Client\Store\ProductCurrencies\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['product_currency_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['product_currency_code'];


	/**
	 * generates productcurrency_code for client
	 *
	 * @return int
	 */
	public function productCurrencyCodeGenerator(): int
	{
		return generateHash();
	}
}
