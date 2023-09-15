<?php

namespace Modules\Plan\Entities;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Modules\Core\Entities\BaseModel;

class PlanExpertiseProcedure extends BaseModel
{
    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Plan\Database\Factories\PlanExpertiseProcedureFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function expertise(): BelongsTo
    {
        return $this->belongsTo(PlanExpertise::class);
    }

    /**
     * Get the relationship.
     */
    public function tusses() : HasManyThrough
    {
        return $this->hasManyThrough(
            Tuss::class,
            ProcedureTussPivot::class,
            'plan_expertise_procedure_id',
            'id',
            'id',
            'tuss_id'
        );
    }

}
