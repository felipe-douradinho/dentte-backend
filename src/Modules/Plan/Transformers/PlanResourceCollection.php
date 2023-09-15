<?php

namespace Modules\Plan\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class PlanResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = PlanResource::class;

}
