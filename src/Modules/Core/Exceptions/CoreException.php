<?php

namespace Modules\Core\Exceptions;

use Modules\Core\Exceptions\Contracts\ExceptionContract;
use Throwable;


abstract class CoreException extends \Exception implements ExceptionContract
{
    /**
     * @var null|string $message
     */
    protected $message;

    /**
     * @var null|Throwable $previous
     */
    protected ?Throwable $previous;

    /**
     * @var int $code
     */
    protected $code;

    /**
     * @var bool $debug
     */
    protected bool $debug = false;

    /**
     * @param string $message
     * @param int|string $code
     * @param Throwable|null $previous
     * @param bool $debug
     */
    public function __construct(string $message = "", int|string $code = 0, Throwable $previous = null, bool $debug = false)
    {
        $this->message = $this->prepareMessage( $message );
        $this->code = $code;
        $this->previous = $previous;
        $this->debug = $debug;
    }

    /**
     * @return bool|string
     */
    public function toJson(): bool|string
    {
        return json_encode( $this->toArray() );
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        if( !$this->debug ) {
            return [
                'message' => $this->message,
            ];
        }

        return [
            'message'       => $this->message,
            'debug'         => $this->previous->getMessage(),
            'exception'     => get_class($this->previous),
            'file'          => $this->previous->getFile(),
            'line'          => $this->previous->getLine(),
            'trace'         => $this->previous->getTrace(),
        ];
    }

}
