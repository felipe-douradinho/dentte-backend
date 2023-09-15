<?php

namespace Modules\Quote\Enums;

use Modules\Core\Traits\EnumTrait;

enum QuoteDiscountTypeEnum : string
{
    use EnumTrait;

    case FIXED       = 'fixed';
    case PERCENTAGE  = 'percentage';
}
