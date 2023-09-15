<?php

namespace Modules\Patient\Entities;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Core\Entities\BaseModel;

class PatientSponsor extends BaseModel
{
    protected $fillable = [];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'birth' => 'date',
    ];


    protected static function newFactory()
    {
        return \Modules\Patient\Database\Factories\PatientSponsorFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function sponsor(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
