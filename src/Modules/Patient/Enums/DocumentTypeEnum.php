<?php

namespace Modules\Patient\Enums;

use Modules\Core\Traits\EnumTrait;

enum DocumentTypeEnum : string
{
    use EnumTrait;

    case RG         = 'RG';
    case CPF        = 'CPF';
    case CNPJ       = 'CNPJ';
}
