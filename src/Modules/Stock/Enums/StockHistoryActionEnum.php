<?php

namespace Modules\Stock\Enums;

use Modules\Core\Traits\EnumTrait;

enum StockHistoryActionEnum : string
{
    use EnumTrait;

    case ADD_ITEM       = '1';
    case REMOVE_ITEM    = '0';
}
