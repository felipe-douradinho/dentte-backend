<?php

namespace Modules\Pipeline\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Core\Entities\BaseModel;

class CardEvent extends BaseModel
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
    //    return $this->provideFilter(\Modules\Pipeline\Http\Requests\Filters\CardEventFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
