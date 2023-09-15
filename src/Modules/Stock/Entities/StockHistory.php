<?php

namespace Modules\Stock\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Core\Entities\BaseModel;
use Modules\User\Entities\User;

class StockHistory extends BaseModel
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

    protected static function newFactory()
    {
        return \Modules\Stock\Database\Factories\StockHistoryFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Stock\Http\Requests\Filters\StockHistoryFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the relationship.
     */
    public function authorized_by(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the relationship.
     */
    public function stock(): BelongsTo
    {
        return $this->belongsTo(Stock::class);
    }
}
