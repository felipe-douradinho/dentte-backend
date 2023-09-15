<?php

namespace Modules\Core\Traits;


trait EnumTrait
{
    public static function toNames(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function toValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function toArray(): array
    {
        return collect(self::cases())->pluck('name', 'value')->toArray();
    }
}
