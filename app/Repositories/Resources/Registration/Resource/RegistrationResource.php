<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Registration\Resource;

class RegistrationResource
{
    /**
     * handle process for repository resource
     *
     * @param array $data
     * @return array
     */
    public function handle(array $data = []): array
    {
        return $data;
    }


    /**
     * additional resource handler for repository resource
     *
     * @param array $data
     * @return array
     */
    public function additionalResourceHandler(array $data = []): array
    {
        return $data;
    }
}
