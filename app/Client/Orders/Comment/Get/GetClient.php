<?php 

namespace App\Client\Orders\Comment\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Orders\Comment\CommentMainSupport;
use App\Models\OrderComment;

class GetClient extends Client
{
	use GeneratorTrait;
	use CommentMainSupport;
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
	protected array $model = [OrderComment::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
