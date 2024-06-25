<?php

namespace App\Client\Customer\Referers\Create;

use App\Exceptions\Exception;
use App\Repositories\Repository;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = [
        'customer_referer_code',
        'customer_friend_code'
    ];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = [
        'customer_referer_code'
    ];


    /**
     * generates customer_referer_code for client
     *
     * @return int
     */
    public function customerRefererCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * generates customer_referer_code for client
     *
     * @return int
     */
    public function customerFriendCodeGenerator(): int
    {
        $friendCode = $this->get('customer_friend_code');

        if (customerCode() === (int)$friendCode) {
            Exception::customException('customerFriendCodeOwn', ['friend' => $friendCode]);
        }

        $repository = Repository::customer()->instance(false);
        $isAvailable = $repository->where('customer_code', $friendCode)->first();

        if (is_null($isAvailable)) {
            Exception::customException('customerFriendCode', ['friend' => $friendCode]);
        }

        return $friendCode;
    }
}
