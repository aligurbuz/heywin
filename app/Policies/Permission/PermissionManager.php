<?php

namespace App\Policies\Permission;

use App\Facades\Role\Permission;
use App\Facades\Role\Role;
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
     * get permission facade instance
     *
     * @return Permission
     */
    public function permission() : Permission
    {
        return Role::permission();
    }

    /**
     * get endpoint permission values
     *
     * @return array
     */
    public function getEndpointPermission(): array
    {
        return $this->permission()->get();
    }

    /**
     * Changes the HTTP Method value of the existing permission information.
     *
     * @param string $http
     * @param bool $value
     * @return void
     */
    public function setEndpointPermission(string $http, bool $value) : void
    {
        $this->permission()->assign($http,$value);
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
        $withMethod = httpMethod() . ucfirst($name);

        if (method_exists($this, 'init')) {
            $this->init();
        }

        if (method_exists($this, $withMethod)) {
            return $this->$withMethod();
        }

        if (method_exists($this, $name)) {
            return $this->$name();
        }

        return $this->handle();
    }
}
