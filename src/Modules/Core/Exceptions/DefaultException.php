<?php

namespace Modules\Core\Exceptions;

use Illuminate\Support\Str;


class DefaultException extends CoreException
{
    /**
     * @param string $message
     * @return string
     */
    public function prepareMessage( string $message ): string
    {
        return $message;
    }
}
