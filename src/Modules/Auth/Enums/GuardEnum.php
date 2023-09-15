<?php

namespace Modules\Auth\Enums;

class GuardEnum
{

    const GUARD_ADMIN       = 'web';
    const GUARD_PATIENT     = 'patient';


    public static array $GUARDS = [
        self::GUARD_ADMIN,
        self::GUARD_PATIENT,
    ];

}
