<?php

namespace Modules\Core\Tests\Feature;

use Modules\User\Entities\User;
use Tests\TestCase;

class BaseTest extends TestCase
{
    /**
     * @var string
     */
    protected string $base_url = '/api';

    /**
     * @var string|null
     */
    protected ?string $user_role = null;

    /**
     * @var User|null $user
     */
    protected ?User $user;

    /**
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();

        $this->user = User::create(User::factory()->make()->getAttributes());
        $this->user->assignRole( $this->user_role );
    }

    /**
     * @return void
     */
    public function testCanLogin()
    {
        $this->assertTrue(
            !is_null($this->user)
        );

        $response = $this->actingAs($this->user)->getJson('/api/users/me');
        $response->assertStatus(200);
    }

}
