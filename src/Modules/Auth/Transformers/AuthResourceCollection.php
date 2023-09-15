<?php

namespace Modules\Auth\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class AuthResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = AuthResource::class;

}
