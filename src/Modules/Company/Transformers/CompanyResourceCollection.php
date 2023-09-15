<?php

namespace Modules\Company\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class CompanyResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = CompanyResource::class;

}
