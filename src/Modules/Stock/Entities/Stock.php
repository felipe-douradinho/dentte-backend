<?php

namespace Modules\Stock\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;
use Modules\Product\Entities\Product;

class Stock extends BaseModel
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
        return \Modules\Stock\Database\Factories\StockFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Stock\Http\Requests\Filters\StockFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the relationship.
     */
    public function histories(): HasMany
    {
        return $this->hasMany(StockHistory::class);
    }
}
