<?php

namespace Modules\Base\Entities;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;

class Plan extends BaseModel
{
    protected $connection = 'mysql_base';

    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Base\Database\Factories\PlanFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function expertises(): HasMany
    {
        return $this->hasMany(PlanExpertise::class);
    }
}
