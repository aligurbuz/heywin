<?php

namespace App\Client\Localizations\Localizations\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Localization;

class CreateClient extends Client
{
	use GeneratorTrait;
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
	protected array $model = [Localization::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];

    /**
     * @var mixed
     */
	protected mixed $languageCode;

    /**
     * get language_code process for client
     *
     * @return mixed
     */
	protected function languageCode() : mixed
    {
        return $this->languageCode;
    }
}
