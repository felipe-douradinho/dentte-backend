<?php

namespace Modules\Referer\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class RefererResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = RefererResource::class;

}
