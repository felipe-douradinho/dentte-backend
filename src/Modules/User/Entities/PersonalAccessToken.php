<?php

namespace Modules\User\Entities;


use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;


class PersonalAccessToken extends SanctumPersonalAccessToken
{

    #protected $connection = 'mysql_auth';

}
