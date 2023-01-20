<?php

namespace App\Facades\Permission;

use App\Factory\Factory;

abstract class PermissionManager
{
    /**
     * @var string|null
     */
    protected ?string $endpoint = null;

    /**
     * constructor for permission facade
     */
    public function __construct()
    {
        $this->endpoint = endpoint(true);
    }

    /**
     * get endpoint for permission
     *
     * @return string
     */
    protected function endpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        return Factory::permission()->checkEndpoint();
    }

    /**
     * @param $name
     * @param $arguments
     * @return bool
     */
    public function __call($name, $arguments): bool
    {
        if (method_exists($this, $name)) {
            return $this->$name();
        }

        return $this->handle();
    }
}