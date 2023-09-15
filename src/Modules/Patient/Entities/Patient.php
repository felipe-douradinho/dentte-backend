<?php

namespace Modules\Patient\Entities;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Core\Entities\BaseModel;
use Modules\Patient\Database\Factories\PatientFactory;
use Modules\Plan\Entities\Plan;
use Modules\Referer\Entities\Referer;

class Patient extends BaseModel
{
    use Filterable;

    protected $fillable = [
        'referer_id',
        'name',
        'gender',
        'birth',
        'email',
        'chart_number',
        'notes',
    ];


    /**
     * @var string[] $casts
     */
    protected $casts = [
        'birth' => 'date',
    ];

    protected static function newFactory(): PatientFactory
    {
        return \Modules\Patient\Database\Factories\PatientFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function documents(): HasMany
    {
        return $this->hasMany(PatientDocument::class);
    }

    /**
     * Get the relationship.
     */
    public function phones(): HasMany
    {
        return $this->hasMany(PatientPhone::class);
    }

    /**
     * Get the relationship.
     */
    public function sponsor(): HasOne
    {
        return $this->hasOne(PatientSponsor::class);
    }

    /**
     * Get the relationship.
     */
    public function referer(): BelongsTo
    {
        return $this->belongsTo( Referer::class );
    }

    /**
     * Get the relationship.
     */
    public function address(): HasOne
    {
        return $this->hasOne( PatientAddress::class );
    }

    /**
     * Get the relationship.
     */
    public function plan(): BelongsToMany
    {
        return $this->belongsToMany(
            Plan::class,
            PatientPlan::class
        );
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\Patient\Http\Requests\Filters\PatientFilter::class);
    }
}
