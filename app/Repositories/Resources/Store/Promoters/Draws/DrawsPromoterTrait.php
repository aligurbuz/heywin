<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\Draws;

use App\Libs\Date;
use App\Models\Entities\Draw;

trait DrawsPromoterTrait
{
	/**
	 * get auto DrawsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function drawsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Draw
	 */
	public function entity(): Draw
	{
		return parent::entity();
	}


	/**
	 * Appends to the end of the returned data.
	 *
	 * @return array
	 */
	public function appends(): array
	{
		return [];
	}

    public function inDate(): void
    {
        assignQueryParameters([
            'filter' => [
                'start_date' => ['>=' => Date::now()],
                'end_date' => ['>=' => Date::now()],
            ]
        ]);
    }

    public function country(): void
    {
        assignQueryParameters([
            'with' => [
                'drawCountries' => [
                    'select' => '*',
                    "with" => [
                        'country' => ['select' => '*']
                    ]
                ]
            ]
        ]);
    }
}
