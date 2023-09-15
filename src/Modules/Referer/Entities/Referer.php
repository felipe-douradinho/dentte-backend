<?php

namespace Modules\Referer\Entities;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;
use Modules\Patient\Entities\Patient;

class Referer extends BaseModel
{
    use Filterable;

    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Referer\Database\Factories\RefererFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function patients(): HasMany
    {
        return $this->HasMany( Patient::class );
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Referer\Http\Requests\Filters\RefererFilter::class);
    }
}
