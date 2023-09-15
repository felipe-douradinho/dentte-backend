<?php

namespace Modules\Localization\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class CountryCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = CountryResource::class;

}
