<?php

namespace Modules\Expense\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Expense\Entities\Expense;
use Modules\Expense\Repositories\ExpenseRepositoryInterface;


class ExpenseRepository extends BaseRepository implements ExpenseRepositoryInterface
{

    /**
     * ExpenseRepository constructor.
     *
     * @param Expense $model
     */
    public function __construct(Expense $model)
    {
        $this->model = $model;
    }

}
