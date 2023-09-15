<?php

namespace Modules\Product\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Core\Entities\BaseModel;
use Modules\Stock\Entities\Stock;

class Product extends BaseModel
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
        return \Modules\Product\Database\Factories\ProductFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Product\Http\Requests\Filters\ProductFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function stock(): HasOne
    {
        return $this->hasOne(Stock::class);
    }
}
