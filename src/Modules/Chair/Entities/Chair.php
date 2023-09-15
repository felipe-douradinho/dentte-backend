<?php

namespace Modules\Chair\Entities;

use EloquentFilter\Filterable;

use Modules\Core\Entities\BaseModel;

class Chair extends BaseModel
{
    use Filterable;

    protected $fillable = [];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = [
        'id'
    ];

    protected static function newFactory()
    {
        return \Modules\Chair\Database\Factories\ChairFactory::new();
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Chair\Http\Requests\Filters\ChairFilter::class);
    }
}
