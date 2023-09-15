<?php

namespace Modules\Pipeline\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;

class Card extends BaseModel
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

    protected static function boot()
    {
        parent::boot();

        static::created(function ($card) {
            event(\Modules\Pipeline\Events\CardEvent::created($card));
        });

        static::updated(function ($card) {
            event(\Modules\Pipeline\Events\CardEvent::updated($card));
        });
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Pipeline\Http\Requests\Filters\CardFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function stage(): BelongsTo
    {
        return $this->belongsTo(Stage::class);
    }

    /**
     * Get the relationship.
     */
    public function events(): HasMany
    {
        return $this->hasMany(CardEvent::class);
    }
}
