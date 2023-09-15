<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\Entities\BaseModel;
use Modules\Patient\Entities\Patient;
use Modules\Plan\Entities\Plan;
use Modules\User\Entities\User;

class Company extends BaseModel
{
    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Company\Database\Factories\CompanyFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

    /**
     * Get the relationship.
     */
    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class);
    }

    /**
     * Get the relationship.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
