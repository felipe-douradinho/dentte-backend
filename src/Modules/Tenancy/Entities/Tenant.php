<?php

namespace Modules\Tenancy\Entities;

use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    protected $connection = 'mysql';

    protected $fillable = [
        'id',
        'name',
    ];

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
        ];
    }
}
