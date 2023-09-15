<?php

namespace Modules\Base\Transformers;

use Modules\Core\Transformers\BaseResourceCollection as CoreBaseResourceCollection;


class BaseResourceCollection extends CoreBaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = BaseResource::class;

}
