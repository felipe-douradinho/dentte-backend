<?php

namespace Modules\Stock\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class StockResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = StockResource::class;

}
