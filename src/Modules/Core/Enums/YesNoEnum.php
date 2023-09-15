<?php

namespace Modules\Core\Enums;

use Modules\Core\Traits\EnumTrait;

enum YesNoEnum : string
{
    use EnumTrait;

    case YES    = '1';
    case NO     = '0';
}
