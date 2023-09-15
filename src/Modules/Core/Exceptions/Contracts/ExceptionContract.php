<?php

namespace Modules\Core\Exceptions\Contracts;


interface ExceptionContract
{

    /**
     * @param string $message
     * @return string
     */
    public function prepareMessage( string $message ): string;

}
