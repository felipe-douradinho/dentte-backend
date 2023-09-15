<?php

namespace Modules\Pipeline\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;

class Pipeline extends BaseModel
{
    //use Filterable;

    protected $fillable = [];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = [
        'id'
    ];

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Pipeline\Http\Requests\Filters\PipelineFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function stages(): HasMany
    {
        return $this->hasMany(Stage::class);
    }
}
