<?php

namespace Modules\Quote\Entities;

use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;

class Quote extends BaseModel
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
        return \Modules\Quote\Database\Factories\QuoteFactory::new();
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Quote\Http\Requests\Filters\QuoteFilter::class);
    }

    /**
     * Get the relationship.
     */
    public function items(): HasMany
    {
        return $this->hasMany(QuoteItem::class);
    }
}
