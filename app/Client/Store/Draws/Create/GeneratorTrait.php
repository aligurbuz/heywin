<?php

namespace App\Client\Store\Draws\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['draw_code', 'remaining_stock'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['draw_code', 'remaining_stock'];


    /**
     * generates draw_code for client
     *
     * @return int
     */
    public function drawCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * generates draw_code for client
     *
     * @return int
     */
    public function remainingStockGenerator(): int
    {
        return $this->get('stock');
    }
}
