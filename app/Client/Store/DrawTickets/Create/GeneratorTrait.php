<?php 

namespace App\Client\Store\DrawTickets\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['ticket_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['ticket_code'];


	/**
	 * generates ticket_code for client
	 *
	 * @return int
	 */
	public function ticketCodeGenerator(): int
	{
		return generateHash();
	}
}
