<?php

namespace Modules\Expense\Entities;

use EloquentFilter\Filterable;
use Modules\Core\Entities\BaseModel;

class Expense extends BaseModel
{
    use Filterable;

    protected $fillable = [
        'expense_category_id',
        'title',
        'value',
        'due_date',
        'notes',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    protected static function newFactory()
    {
        return \Modules\Expense\Database\Factories\ExpenseFactory::new();
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Expense\Http\Requests\Filters\ExpenseFilter::class);
    }
}
