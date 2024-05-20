<?php

namespace App\Client\Store\Products\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['product_code', 'currency'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['product_code'];


    /**
     * generates product_code for client
     *
     * @return int
     */
    public function productCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * generates product_code for client
     *
     * @return array
     */
    public function currencyGenerator(): array
    {
        return [
            'currency_code' => 742098090
        ];
    }
}
