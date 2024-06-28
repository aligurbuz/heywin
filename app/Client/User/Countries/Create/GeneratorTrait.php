<?php 

namespace App\Client\User\Countries\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['user_country_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['user_country_code'];


	/**
	 * generates usercountry_code for client
	 *
	 * @return int
	 */
	public function userCountryCodeGenerator(): int
	{
		return generateHash();
	}
}
