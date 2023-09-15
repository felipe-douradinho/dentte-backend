<?php

namespace Modules\Expense\Repositories\Eloquent;

use Modules\Core\Repositories\Eloquent\BaseRepository;
use Modules\Expense\Entities\ExpenseCategory;
use Modules\Expense\Repositories\ExpenseCategoryRepositoryInterface;


class ExpenseCategoryRepository extends BaseRepository implements ExpenseCategoryRepositoryInterface
{

    /**
     * ExpenseCategoryRepository constructor.
     *
     * @param ExpenseCategory $model
     */
    public function __construct(ExpenseCategory $model)
    {
        $this->model = $model;
    }

}
