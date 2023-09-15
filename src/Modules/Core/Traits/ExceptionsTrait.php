<?php

namespace Modules\Core\Traits;

use Illuminate\Database\QueryException;
use Illuminate\Support\Str;
use Throwable;

trait ExceptionsTrait
{
    use ResponseTrait;

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Throwable $exception
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     * @throws Throwable
     */
    public function render($request, Throwable $exception)
    {
        if( env('ENVIRONMENT') === 'production' ) {
            return $this->errorResponse(
                'Something went wrong. Please try again later.'
            );
        }

        switch (true) {
            case $exception instanceof QueryException:
                $exception = new \Modules\Core\Exceptions\QueryException(
                    $exception->getMessage(), $exception->getCode(), $exception, env('APP_DEBUG')
                );
            break;

            default:
                $exception = new \Modules\Core\Exceptions\DefaultException(
                    $exception->getMessage(), $exception->getCode(), $exception, env('APP_DEBUG')
                );
            break;
        }

        return $this->errorResponse(
            $exception->toArray(), 400
        );
    }

}
