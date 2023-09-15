<?php

namespace Modules\Product\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class ProductResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = ProductResource::class;

}
