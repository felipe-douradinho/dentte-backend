<?php

namespace Modules\Quote\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class QuoteItemCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = QuoteItemResource::class;

}
