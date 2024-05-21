<?php 

namespace App\Client\Store\DrawTickets\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Store\DrawTickets\DrawTicketsMainSupport;
use App\Models\Ticket;

class CreateClient extends Client
{
	use GeneratorTrait;
	use DrawTicketsMainSupport;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = [];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [Ticket::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
