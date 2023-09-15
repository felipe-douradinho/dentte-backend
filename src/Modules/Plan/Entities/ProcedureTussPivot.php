<?php

namespace Modules\Plan\Entities;

use Modules\Core\Entities\BaseModel;

class ProcedureTussPivot extends BaseModel
{
    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Plan\Database\Factories\ProcedureTussPivotFactory::new();
    }
}
