<?php

namespace Modules\Core\Exceptions;

use Illuminate\Support\Str;


class QueryException extends CoreException
{
    /**
     * @param string $message
     * @return string
     */
    public function prepareMessage( string $message ): string
    {
        if( Str::contains($message, "1265 Data truncated") ) {
            return 'Data truncated. Please check your input.';
        }

        if( Str::contains($message, "Integrity constraint violation: 1062 Duplicate entry") ) {
            return 'Duplicate entry. Please check your input.';
        }

        if( Str::contains($message, "1451 Cannot delete or update a parent row:") ) {
            return 'This record is being used by another record. Please check your input.';
        }

        return $message;
    }
}
