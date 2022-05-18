<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Timezones;

use App\Models\Timezone;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Resources\Timezones\Events\Timezones\AfterCreate;
use App\Repositories\Resources\Timezones\Events\Timezones\AfterUpdate;
use App\Repositories\Resources\Timezones\Events\Timezones\BeforeCreate;
use App\Repositories\Resources\Timezones\Events\Timezones\BeforeUpdate;
use App\Repositories\Resources\Timezones\PropertyHandlers\TimezonesPropertyHandlerTrait;

class TimezonesRepository extends EloquentRepository implements TimezonesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use TimezonesPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Timezone::class;

    /**
     * get auto TimezonesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function timezonesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
