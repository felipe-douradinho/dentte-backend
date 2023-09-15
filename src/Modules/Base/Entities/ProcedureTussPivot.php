<?php

namespace Modules\Base\Entities;

use Modules\Core\Entities\BaseModel;

class ProcedureTussPivot extends BaseModel
{
    protected $connection = 'mysql_base';

    protected $fillable = [];


    protected static function newFactory()
    {
        return \Modules\Base\Database\Factories\ProcedureTussPivotFactory::new();
    }
}
