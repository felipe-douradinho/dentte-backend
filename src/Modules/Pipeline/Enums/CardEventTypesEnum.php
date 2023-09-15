<?php

namespace Modules\Pipeline\Enums;

use Modules\Core\Traits\EnumTrait;

enum CardEventTypesEnum : string
{
    use EnumTrait;

    case CREATION       = '1';
    case STAGE_CHANGE   = '2';
    case COMMENT        = '3';
}
