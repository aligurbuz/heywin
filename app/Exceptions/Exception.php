<?php

namespace App\Exceptions;

use App\Services\AppContainer;

/**
 * Class Exception
 * @method static customException($message = null,$keys = [])
 * @method static validationException($message = null,$keys = [])
 * @method static loginException($message = null,$keys = [])
 * @method static authenticateException($message = null,$keys = [])
 * @method static updateException($message = null,$keys = [])
 * @method static apiKeyException($message = null,$keys = [])
 * @method static accessLoggerException($message = null,$keys = [])
 * @method static clientFormatException($message = null,$keys = [])
 * @method static clientEmptyException($message = null,$keys = [])
 * @method static clientArrayLimiterException($message = null,$keys = [])
 * @method static clientCapsuleException($message = null,$keys = [])
 * @method static contentTypeException($message = null,$keys = [])
 * @method static logoutException($message = null,$keys = [])
 * @method static filterException($message = null,$keys = [])
 * @method static modelCreateException($message = null,$keys = [])
 * @method static modelUniqueCreateException($message = null,$keys = [])
 * @method static grandAuthenticateException($message = null,$keys = [])
 * @method static rangeException($message = null,$keys = [])
 * @method static selectException($message = null,$keys = [])
 * @method static withException($message = null,$keys = [])
 * @method static withSelectException($message = null,$keys = [])
 * @method static cacheException($message = null,$keys = [])
 * @method static permissionException($message = null,$keys = [])
 * @method static clientActionException($message = null,$keys = [])
 * @package App\Exceptions
 */
class Exception
{
    /**
     * throws custom exception for statement defined as static
     *
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        $namespace = 'App\Exceptions\\Custom\\'.ucfirst($name);

        // this container data is used in the script running on the access_logger middleware layer.
        // this data saved in the trace field in the access_logger table gives the debugBackTrace data in the exception system.
        static::setKeyForContainer('debugBackTrace',debug_backtrace());

        if(isset($arguments[0])){
            static::setKeyForContainer($namespace,($arguments[1] ?? (is_array($arguments[0]) ? $arguments[0] : [])));
            throw new $namespace((is_array($arguments[0]) ? '' : $arguments[0]));
        }
        else{
            throw new $namespace();
        }
    }

    /**
     * set key for container
     *
     * @param $exceptionName
     * @param mixed $data
     */
    private static function setKeyForContainer($exceptionName,mixed $data) : void
    {
        AppContainer::set($exceptionName,is_string($data) ? ['key' => $data] : $data,true);
    }
}
