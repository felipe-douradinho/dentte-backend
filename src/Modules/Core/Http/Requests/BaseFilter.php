<?php

namespace Modules\Core\Http\Requests;

use EloquentFilter\ModelFilter;


class BaseFilter extends ModelFilter
{
    /**
     * Array of method names that should not be called.
     *
     * @var string[] $blacklist
     */
    protected $blacklist = [
        //'secretMethod'
    ];


    #public function company($id) : BaseFilter
    #{
    #    return $this->where('company_id', $id);
    #}

}
