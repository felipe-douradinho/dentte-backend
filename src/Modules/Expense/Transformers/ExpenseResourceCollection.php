<?php

namespace Modules\Expense\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class ExpenseResourceCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = ExpenseResource::class;

}
