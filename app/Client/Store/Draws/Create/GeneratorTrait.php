<?php

namespace App\Client\Store\Draws\Create;

use App\Exceptions\Exception;
use App\Libs\Date;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = [
        'draw_code',
        'remaining_stock',
        'start_date',
        'end_date',
        'draw_date'
    ];

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

    public function startDateGenerator()
    {
        if ($this->get('start_date') < Date::now()) {
            Exception::customException('startDatePast');
        }

        return $this->get('start_date');
    }

    public function endDateGenerator()
    {
        if ($this->get('start_date') >= $this->get('end_date')) {
            Exception::customException('endDatePast');
        }

        return $this->get('end_date');
    }

    public function drawDateGenerator()
    {
        if ($this->get('end_date') >= $this->get('draw_date')) {
            Exception::customException('drawDatePast');
        }

        return $this->get('draw_date');
    }
}
