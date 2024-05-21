<?php

namespace App\Client\Store\DrawTickets\Create;

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['ticket_code','number','ticket_status'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['ticket_code','number','ticket_status'];


	/**
	 * generates ticket_code for client
	 *
	 * @return int
	 */
	public function ticketCodeGenerator(): int
	{
		return generateHash();
	}

    /**
     * generates number for client
     *
     * @return string
     */
    public function numberGenerator(): string
    {
        return md5(time());
    }

    /**
     * generates ticket status for client
     *
     * @return int
     */
    public function ticketStatusGenerator(): int
    {
        return 0;
    }
}
