<?php

namespace Modules\User\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class UserResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = UserResource::class;

}
