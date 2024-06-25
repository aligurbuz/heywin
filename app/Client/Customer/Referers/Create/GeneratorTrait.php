<?php

namespace App\Client\Customer\Referers\Create;

use App\Exceptions\Exception;
use App\Facades\Database\Customer\Referer;
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
        'customer_friend_code',
        'level',
        'percent',
        'gain'
    ];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = [
        'customer_referer_code',
        'level',
        'percent',
        'gain'
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
     * generates level for client
     *
     * @return string
     */
    public function levelGenerator(): string
    {
        return '1';
    }

    /**
     * generates percent for client
     *
     * @return float
     */
    public function percentGenerator(): float
    {
        return Referer::$percents[1];
    }

    /**
     * generates gain for client
     *
     * @return float
     */
    public function gainGenerator(): float
    {
        return 0;
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
