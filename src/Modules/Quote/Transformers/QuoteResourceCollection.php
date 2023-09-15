<?php

namespace Modules\Quote\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class QuoteResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = QuoteResource::class;

}
