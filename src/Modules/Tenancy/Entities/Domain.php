<?php

namespace Modules\Tenancy\Entities;

use Stancl\Tenancy\Database\Models\Domain as BaseDomain;

class Domain extends BaseDomain
{
    protected $connection = 'mysql';

    protected $fillable = [
        'domain',
        'tenant_id',
    ];
}
