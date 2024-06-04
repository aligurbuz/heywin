<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Front\Promoters\Langs;

use App\Models\Entities\FrontLang;

trait LangsPromoterTrait
{
	/**
	 * get auto LangsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function langsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return FrontLang
	 */
	public function entity(): FrontLang
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
}
