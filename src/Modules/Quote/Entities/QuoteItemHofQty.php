<?php

namespace Modules\Quote\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Core\Entities\BaseModel;

class QuoteItemHofQty extends BaseModel
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
        return \Modules\Quote\Database\Factories\QuoteItemHofQtyFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Quote\Http\Requests\Filters\QuoteItemHofQtyFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function quote_item(): BelongsTo
    {
        return $this->belongsTo(QuoteItem::class);
    }
}
