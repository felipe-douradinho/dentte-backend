<?php

namespace Modules\Expense\Entities;

use EloquentFilter\Filterable;
use Modules\Core\Entities\BaseModel;

class ExpenseCategory extends BaseModel
{
    use Filterable;

    protected $fillable = [
        'name',
    ];


    protected static function newFactory()
    {
        return \Modules\Expense\Database\Factories\ExpenseCategoryFactory::new();
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Expense\Http\Requests\Filters\ExpenseCategoryFilter::class);
    }
}
