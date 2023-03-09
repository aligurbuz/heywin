<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Profiles;

use App\Models\Entities\Customer;
use App\Repositories\EloquentRepository;
use App\Services\Client;
use Illuminate\Database\Eloquent\Builder;

trait ProfilesPromoterTrait
{
    /**
     * get auto ProfilesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function profilesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return Customer
     */
    public function entity(): Customer
    {
        return parent::entity();
    }

    /**
     * the range value getting only male customers.
     *
     * @param null|Builder $builder
     * @return EloquentRepository
     */
    public function male(Builder $builder = null): EloquentRepository
    {
        Client::setFilter('gender', __FUNCTION__);

        $this->repository = $this->setModel('customerGender')->withSource()->builder($builder);

        return $this;
    }

    /**
     * the range value getting only female customers.
     *
     * @param null|Builder $builder
     * @return EloquentRepository
     */
    public function female(Builder $builder = null): EloquentRepository
    {
        Client::setFilter('gender', __FUNCTION__);

        $this->repository = $this->setModel('customerGender')->withSource()->builder($builder);

        return $this;
    }
}
