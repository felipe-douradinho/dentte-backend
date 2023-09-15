<?php

namespace Modules\Plan\Entities;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;


class PlanExpertise extends BaseModel
{
    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Plan\Database\Factories\PlanExpertiseFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function procedures(): HasMany
    {
        return $this->hasMany(PlanExpertiseProcedure::class);
    }

    /**
     * Get the relationship.
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

}
