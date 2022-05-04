<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Constants;
use App\Exceptions\ExceptionTrait;
use App\Exceptions\ExceptionEventTrait;

class GrandAuthenticateException extends Exception
{
    use ExceptionTrait,ExceptionEventTrait;

    /**
     * @var string
     */
    protected string $langKey = 'grandAuthenticateException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Grand Authenticate exception", $code = Constants::error403, Throwable $previous = null)
    {
        parent::__construct($getMessage = $this->setMessage($message), $code, $previous);

        $this->eventHandler($getMessage);
    }
}
