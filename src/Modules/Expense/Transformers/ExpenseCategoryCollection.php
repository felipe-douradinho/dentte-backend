<?php

namespace Modules\Expense\Transformers;

use Modules\Core\Transformers\BaseResourceCollection;


class ExpenseCategoryCollection extends BaseResourceCollection
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = ExpenseCategoryResource::class;

}
