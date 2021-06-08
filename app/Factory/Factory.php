<?php

declare(strict_types=1);

namespace App\Factory;

use App\Factory\Cache\Interfaces\CacheInterface;
use App\Factory\Notify\Interfaces\NotifyInterface;
use App\Factory\Logger\Interfaces\LoggerInterface;
use App\Factory\Storage\Interfaces\StorageInterface;
use App\Factory\Repository\Interfaces\RepositoryInterface;

/**
 * Class Factory
 * @method static LoggerInterface logger($arguments = null)
 * @method static StorageInterface storage($arguments = null)
 * @method static RepositoryInterface repository($arguments = null)
 * @method static NotifyInterface notify($arguments = null)
 * @method static CacheInterface cache($arguments = null)
 * @package App\Factory
 */
class Factory extends FactoryManager
{
    /**
     * #this is adapter property for factory model
     * get the called class for factory
     *
     * @var array
     */
    protected static array $adapters = [
        'Logger'        => 'MongoDbLogger',
        'Repository'    => 'Redis',
        'Notify'        => 'Slack',
        'Cache'         => 'Redis',
    ];

    /**
     * binds to classes as parameters.
     *
     * @return void
     */
    public static function bindings() : void
    {
        static::bind('Storage',['files' => request()->allFiles()]);
    }
}
