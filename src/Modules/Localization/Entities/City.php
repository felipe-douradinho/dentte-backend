<?php

namespace Modules\Localization\Entities;

//use EloquentFilter\Filterable;

use Modules\Core\Entities\BaseModel;

class City extends BaseModel
{
    protected $connection = 'mysql_base';

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
        return \Modules\Localization\Database\Factories\CityFactory::new();
    }

    //public function modelFilter()
    //{
    //    return $this->provideFilter(\Modules\Localization\Http\Requests\Filters\CityFilter::class);
    //}
}
