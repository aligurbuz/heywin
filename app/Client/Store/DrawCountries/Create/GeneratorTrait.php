<?php 

namespace App\Client\Store\DrawCountries\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['draw_country_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['draw_country_code'];


	/**
	 * generates drawcountry_code for client
	 *
	 * @return int
	 */
	public function drawCountryCodeGenerator(): int
	{
		return generateHash();
	}
}
