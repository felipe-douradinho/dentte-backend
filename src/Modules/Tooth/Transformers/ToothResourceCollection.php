<?php

namespace Modules\Tooth\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class ToothResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = ToothResource::class;

}
