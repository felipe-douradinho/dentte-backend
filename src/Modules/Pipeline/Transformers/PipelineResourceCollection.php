<?php

namespace Modules\Pipeline\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class PipelineResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = PipelineResource::class;

}
