<?php

namespace Modules\Pipeline\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;

class Stage extends BaseModel
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
    //    return $this->provideFilter(\Modules\Pipeline\Http\Requests\Filters\StageFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function pipeline(): BelongsTo
    {
        return $this->belongsTo(Pipeline::class);
    }

    /**
     * Get the relationship.
     */
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
