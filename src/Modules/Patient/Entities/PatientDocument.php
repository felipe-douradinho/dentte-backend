<?php

namespace Modules\Patient\Entities;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Core\Entities\BaseModel;

class PatientDocument extends BaseModel
{
    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Patient\Database\Factories\PatientDocumentFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
