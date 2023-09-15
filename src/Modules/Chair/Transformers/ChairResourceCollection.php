<?php

namespace Modules\Chair\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class ChairResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = ChairResource::class;

}
