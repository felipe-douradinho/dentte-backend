<?php

namespace Modules\Patient\Entities;

//use EloquentFilter\Filterable;

use Modules\Core\Entities\BaseModel;

class PatientPlan extends BaseModel
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
        return \Modules\Patient\Database\Factories\PatientPlanFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Patient\Http\Requests\Filters\PatientPlanFilter::class);
    //}
}
