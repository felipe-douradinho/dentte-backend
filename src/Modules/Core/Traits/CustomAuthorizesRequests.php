<?php

namespace Modules\Core\Traits;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

trait CustomAuthorizesRequests
{
    use AuthorizesRequests;

    /**
     * Get the list of resource methods which do not have model parameters.
     *
     * @return array
     */
    protected function resourceMethodsWithoutModels() : array
    {
        return ['index', 'create', 'store', 'update', 'destroy', 'show'];
    }
}
