<?php

namespace Modules\Pipeline\Enums;

use Modules\Core\Traits\EnumTrait;

enum StageIconsEnum : string
{
    use EnumTrait;

    case ICON_DEFAULT       = '1';
    case ICON_CHECK         = '2';
    case ICON_CLOSE         = '3';
}
