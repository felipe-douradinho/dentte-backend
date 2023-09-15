<?php

namespace Modules\Patient\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Core\Entities\BaseModel;

class PatientAddress extends BaseModel
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
        return \Modules\Patient\Database\Factories\PatientAddressFactory::new();
    }

    /**
     * Get the relationship.
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo( Patient::class );
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Patient\Http\Requests\Filters\PatientAddressFilter::class);
    //}
}
