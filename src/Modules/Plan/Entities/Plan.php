<?php

namespace Modules\Plan\Entities;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Modules\Core\Entities\BaseModel;
use Modules\Patient\Entities\Patient;
use Modules\Patient\Entities\PatientPlan;

class Plan extends BaseModel
{
    use Filterable;

    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Plan\Database\Factories\PlanFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function expertises(): HasMany
    {
        return $this->hasMany(PlanExpertise::class);
    }

    /**
     * Get the relationship.
     */
    public function patients(): HasManyThrough
    {
        return $this->hasManyThrough(
            Patient::class,
            PatientPlan::class,
            'plan_id',
            'id',
            'id',
            'patient_id'
        );
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Plan\Http\Requests\Filters\PlanFilter::class);
    }
}
