<?php

namespace Modules\Patient\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class PatientAddressCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = PatientAddressResource::class;

}
