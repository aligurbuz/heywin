<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use App\Factory\Factory;
use App\Services\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            if($e->getCode() == '0' && app()->environment()!=='local'){
                Factory::slack(['error' => $e])->getError500();
            }
        });
    }

    /**
     * @param $request
     * @param Throwable $e
     * @return object
     *
     * @throws Exception
     */
    public function render($request, Throwable $e): object
    {
        return Response::error($e->getMessage(),$e->getCode(),$e);
    }
}
