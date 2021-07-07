<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\User\Contracts\UserRepositoryContract;
use App\Repositories\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Countries\Contracts\CountriesRepositoryContract;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository
{
    /**
     * get role repository instance
     *
     * @return RolesRepositoryContract
     */
    public static function role() : RolesRepositoryContract
    {
        return app()->get(RolesRepositoryContract::class);
    }
    
    /**
     * get superAdmin repository instance
     *
     * @return SuperAdminsRepositoryContract
     */
    public static function superAdmin() : SuperAdminsRepositoryContract
    {
        return app()->get(SuperAdminsRepositoryContract::class);
    }
    
    /**
     * get language repository instance
     *
     * @return LanguageRepositoryContract
     */
    public static function language() : LanguageRepositoryContract
    {
        return app()->get(LanguageRepositoryContract::class);
    }

    /**
     * get localization repository instance
     *
     * @return LocalizationsRepositoryContract
     */
    public static function localization() : LocalizationsRepositoryContract
    {
        return app()->get(LocalizationsRepositoryContract::class);
    }

    /**
     * get country repository instance
     *
     * @return CountriesRepositoryContract
     */
    public static function country() : CountriesRepositoryContract
    {
        return app()->get(CountriesRepositoryContract::class);
    }

    /**
     * get user repository instance
     *
     * @return UserRepositoryContract
     */
    public static function user() : UserRepositoryContract
    {
        return app()->get(UserRepositoryContract::class);
    }

    /**
     * get logger repository instance
     *
     * @return LoggerRepositoryContract
     */
    public static function logger() : LoggerRepositoryContract
    {
        return app()->get(LoggerRepositoryContract::class);
    }

    /**
     * get call static for repository
     *
     * @param string|null $name
     * @param array $arguments
     * @return bool;
     */
    public static function __callStatic(?string $name,array $arguments = []) : bool
    {
        return false;
    }
}
