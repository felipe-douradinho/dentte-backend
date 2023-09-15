<?php

namespace Modules\Localization\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class CityCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = CityResource::class;

}
