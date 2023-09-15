<?php

namespace Modules\Quote\Enums;

use Modules\Core\Traits\EnumTrait;

enum QuoteStatusEnum : string
{
    use EnumTrait;

    case DRAFT       = 'draft';
    case SENT        = 'sent';
    case ACCEPTED    = 'accepted';
    case DECLINED    = 'declined';
    case EXPIRED     = 'expired';
    case CANCELED    = 'canceled';
}
