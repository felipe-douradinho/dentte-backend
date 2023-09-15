<?php

namespace Modules\Pipeline\Enums;

use Modules\Core\Traits\EnumTrait;

enum PipelineTypesEnum : string
{
    use EnumTrait;

    case SALES       = 'sales';
    case SCHEDULING  = 'schedules';
    case CUSTOM      = 'custom';
}
