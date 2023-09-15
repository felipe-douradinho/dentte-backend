<?php

namespace Modules\Core\Enums;

use Modules\Core\Traits\EnumTrait;

enum GenderEnum : string
{
    use EnumTrait;

    case MALE       = 'M';
    case FEMALE     = 'F';
    case UNDEFINED  = 'U';

    public function color(): string
    {
        // ex:
        //$status = GenderEnum::FEMALE;
        //$status->color(); // 'pink'

        return match($this)
        {
            self::MALE      => 'blue',
            self::FEMALE    => 'pink',
            self::UNDEFINED => 'grey',
        };
    }
}
