<?php

namespace Modules\User\Tests\Feature\UserDentist;

use Modules\Auth\Services\RoleProfileService;
use Modules\Core\Tests\Feature\BaseTest;
use Modules\User\Entities\User;

class UsersTest extends BaseTest
{

    public function setUp() : void
    {
        $this->base_url = $this->base_url . '/users';
        $this->user_role = RoleProfileService::DENTIST;

        parent::setUp();
    }

    /**
     * @return void
     */
    public function testCannotList()
    {
        $response = $this->actingAs($this->user)->getJson( $this->base_url );
        $response->assertStatus(403);
    }

    /**
     * @return void
     */
    public function testCannotCreate()
    {
        $payload = User::factory()->make()->getAttributes();

        $response = $this->actingAs($this->user)->postJson(
            $this->base_url, $payload
        );

        $response->assertStatus(403);

        $this->assertNull( User::whereEmail($payload['email'])->first() );
    }

    /**
     * @return void
     */
    public function testCanUpdateOwnAccount()
    {
        $payload = User::factory()->make()->getAttributes();

        unset($payload['email_verified_at']);
        unset($payload['remember_token']);

        $response = $this->actingAs($this->user)->putJson(
            $this->base_url . "/{$this->user->id}", $payload
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testCannotUpdateOther()
    {
        $payload = User::factory()->make()->getAttributes();

        $other_user = User::where('id', '!=', $this->user->id)
            ->inRandomOrder()
            ->first();

        unset($payload['email_verified_at']);
        unset($payload['remember_token']);

        $response = $this->actingAs($this->user)->putJson(
            $this->base_url . "/{$other_user->id}", $payload
        );

        $response->assertStatus(403);

        $this->assertTrue( $payload['email'] !== $this->user->email );
    }

    /**
     * @return void
     */
    public function testCannotDestroyOwnAccount()
    {
        $response = $this->actingAs($this->user)->deleteJson(
            $this->base_url . "/{$this->user->id}"
        );

        $response->assertStatus(403);

        $this->assertModelExists($this->user);
    }

    /**
     * @return void
     */
    public function testCannotDestroyOtherAccount()
    {
        $other_user = User::where('id', '!=', $this->user->id)
            ->inRandomOrder()
            ->first();

        $response = $this->actingAs($this->user)->deleteJson(
            $this->base_url . "/{$other_user->id}"
        );

        $response->assertStatus(403);

        $this->assertModelExists( $other_user );
    }

}
