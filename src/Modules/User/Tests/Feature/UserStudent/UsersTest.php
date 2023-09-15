<?php

namespace Modules\User\Tests\Feature\UserStudent;

use Modules\Auth\Services\RoleProfileService;


class UsersTest extends \Modules\User\Tests\Feature\UserDentist\UsersTest
{

    public function setUp() : void
    {
        parent::setUp();

        $this->user_role = RoleProfileService::STUDENT;
    }

}
