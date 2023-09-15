<?php

namespace Modules\Tooth\Enums;

use Modules\Core\Traits\EnumTrait;

enum ToothCategoryEnum : string
{
    use EnumTrait;

    case PERMANENT    = 'P';
    case DECIDUOUS    = 'D';
    case HOF          = 'H';
}
