<?php

namespace Modules\Tooth\Enums;

use Modules\Core\Traits\EnumTrait;

enum ToothTypeEnum : string
{
    use EnumTrait;

    case TOOTH    = 'T';
    case REGION   = 'R';
}
