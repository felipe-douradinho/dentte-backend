<?php

namespace Modules\Quote\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Base\Entities\PlanExpertiseProcedure;
use Modules\Core\Entities\BaseModel;
use Modules\Plan\Entities\Plan;
use Modules\Tooth\Entities\Tooth;
use Modules\User\Entities\User;

class QuoteItem extends BaseModel
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
        return \Modules\Quote\Database\Factories\QuoteItemFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Quote\Http\Requests\Filters\QuoteItemFilter::class);
    //}

    /**
     * Get the relationship.
     */
    public function quote(): BelongsTo
    {
        return $this->belongsTo(Quote::class);
    }

    /**
     * Get the relationship.
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Get the relationship.
     */
    public function treatment(): BelongsTo
    {
        return $this->belongsTo(PlanExpertiseProcedure::class);
    }

    /**
     * Get the relationship.
     */
    public function dentist(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the relationship.
     */
    public function tooth(): BelongsTo
    {
        return $this->belongsTo(Tooth::class);
    }

    /**
     * Get the relationship.
     */
    public function hof_qty(): HasOne
    {
        return $this->hasOne(QuoteItemHofQty::class);
    }
}
