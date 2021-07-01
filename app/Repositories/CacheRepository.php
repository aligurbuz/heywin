<?php

declare(strict_types=1);

namespace App\Repositories;

use Closure;
use App\Factory\Factory;
use App\Services\Client;

/**
 * Trait CacheRepository
 * @package App\Repositories
 */
trait CacheRepository
{
    /**
     * @var string|null
     */
    protected ?string $cacheModelName = null;

    /**
     * @var mixed|null
     */
    protected mixed $cacheFingerPrint = null;

    /**
     * @var object|null
     */
    protected ?object $cacheInstance = null;

    /**
     * make cache model data for repository
     *
     * @param callable $callback
     * @return array
     */
    public function cacheHandler(callable $callback) : array
    {
        if(!isLocale()){
            $this->setProperties();

            return $this->cache($callback,function($proxy){
                return $proxy;
            });
        }

        return $this->proxy($callback);
    }

    /**
     * set property value for cache repository
     *
     * @return void
     */
    private function setProperties() : void
    {
        $this->cacheModelName     = $this->getModelName();
        $this->cacheFingerPrint   = Client::fingerPrint(false);
        $this->cacheInstance      = Factory::cache();
    }

    /**
     * get redis process for repository cache
     *
     * @param callable $data
     * @param callable $callback
     * @return array
     */
    private function cache(callable $data,callable $callback) : array
    {
        return $this->cacheInstance->hget(
            $this->cacheModelName,
            (string)$this->cacheFingerPrint,
            $this->setCacheRepository($data,$callback)
        );
    }

    /**
     * it makes cache data for eloquent
     *
     * @param callable $data
     * @param callable $callback
     * @return Closure
     */
    private function setCacheRepository(callable $data, callable $callback): Closure
    {
        return function() use($data,$callback)
        {
            $callData = call_user_func($data);
            $proxy = $proxyCallback = $this->proxy($callData);
            $proxyCallback['cache'] = 'true';

            $this->cacheInstance->hset(
                $this->cacheModelName,
                (string)$this->cacheFingerPrint,
                json_encode($proxyCallback)
            );

            return call_user_func($callback,$proxy);
        };
    }
}