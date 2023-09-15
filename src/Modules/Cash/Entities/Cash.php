<?php

namespace Modules\Cash\Entities;

use EloquentFilter\Filterable;
use Modules\Core\Entities\BaseModel;

class Cash extends BaseModel
{
    use Filterable;

    protected $casts = [ ];

    protected $fillable = [
        'name',
        'is_default',
        'is_enabled'
    ];


    protected static function newFactory()
    {
        return \Modules\Cash\Database\Factories\CashFactory::new();
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Cash\Http\Requests\Filters\CashFilter::class);
    }
}
