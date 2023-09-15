<?php

namespace Modules\Cash\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class CashResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = CashResource::class;

}
