<?php

namespace Modules\Base\Entities;

use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Modules\Core\Entities\BaseModel;

class Tuss extends BaseModel
{
    protected $connection = 'mysql_base';

    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Base\Database\Factories\TussFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function procedures() : HasManyThrough
    {
        return $this->hasManyThrough(
            PlanExpertiseProcedure::class,
            ProcedureTussPivot::class,
            'tuss_id',
            'id',
            'id',
            'plan_expertise_procedure_id'
        );
    }
}
