<?php

namespace Modules\User\Tests\Feature\UserDentistAdmin;

use Illuminate\Testing\Fluent\AssertableJson;
use Modules\Auth\Services\RoleProfileService;
use Modules\Core\Tests\Feature\BaseTest;
use Modules\User\Entities\User;

class UsersTest extends BaseTest
{

    public function setUp() : void
    {
        $this->base_url = $this->base_url . '/users';
        $this->user_role = RoleProfileService::DENTIST_ADMIN;

        parent::setUp();
    }

    /**
     * @return void
     */
    public function testCanList()
    {
        $response = $this->actingAs($this->user)->getJson( $this->base_url );
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testCanCreate()
    {
        $payload = User::factory()->make()->getAttributes();

        $response = $this->actingAs($this->user)->postJson(
            $this->base_url, $payload
        );

        $response->assertStatus(200);

        $this->assertModelExists($this->user);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->where('data.email', $payload['email'])->etc()
        );
    }

    /**
     * @return void
     */
    public function testCanUpdate()
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
    public function testCanUpdateOther()
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

        $response->assertStatus(200);

        $other_user = User::find( $other_user->id );

        $this->assertTrue( $payload['email'] == $other_user->email );
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
    public function testCanDestroyOtherAccount()
    {
        $other_user = User::where('id', '!=', $this->user->id)
            ->inRandomOrder()
            ->first();

        $response = $this->actingAs($this->user)->deleteJson(
            $this->base_url . "/{$other_user->id}"
        );

        $response->assertStatus(200);

        $this->assertModelMissing( $other_user );
    }
}
