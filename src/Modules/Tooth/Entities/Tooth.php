<?php

namespace Modules\Tooth\Entities;

//use EloquentFilter\Filterable;

use Illuminate\Database\Eloquent\Builder;
use Modules\Core\Entities\BaseModel;
use Modules\Tooth\Enums\ToothCategoryEnum;
use Modules\Tooth\Enums\ToothTypeEnum;


class Tooth extends BaseModel
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
        return \Modules\Tooth\Database\Factories\ToothFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Tooth\Http\Requests\Filters\ToothFilter::class);
    //}

    /**
     * @param  Builder $query
     * @return Builder
     */
    public function scopeTypeTooth(Builder $query): Builder
    {
        return $query->where('type', '=', ToothTypeEnum::TOOTH->value);
    }

    /**
     * @param  Builder $query
     * @return Builder
     */
    public function scopeTypeRegion(Builder $query): Builder
    {
        return $query->where('type', '=', ToothTypeEnum::REGION->value);
    }

    /**
     * @param  Builder $query
     * @return Builder
     */
    public function scopeCategoryPermanent(Builder $query): Builder
    {
        return $query->where('category', '=', ToothCategoryEnum::PERMANENT->value);
    }

    /**
     * @param  Builder $query
     * @return Builder
     */
    public function scopeCategoryDeciduous(Builder $query): Builder
    {
        return $query->where('category', '=', ToothCategoryEnum::DECIDUOUS->value);
    }

    /**
     * @param  Builder $query
     * @return Builder
     */
    public function scopeCategoryHof(Builder $query): Builder
    {
        return $query->where('category', '=', ToothCategoryEnum::HOF->value);
    }
}
