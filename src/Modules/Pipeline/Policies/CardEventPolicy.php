<?php

namespace Modules\Pipeline\Policies;

use Illuminate\Support\Str;
use Modules\Auth\Services\RoleProfileService;
use Modules\Core\Policies\BasePolicy;
use Modules\Pipeline\Entities\CardEvent;
use Modules\User\Entities\User;


class CardEventPolicy extends BasePolicy
{
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->entity_singular_name = Str::snake('CardEvent');

        $this->entity = CardEvent::whereId( request()->route()->{$this->entity_singular_name} )->first([
            'id',
            //'company_id',
        ]);
    }

    /**
     * Determine whether the user can view the resource.
     *
     * @return mixed
     */
    public function view(?User $user)
    {
        // authors can view
        if ($user->can( $this->abilites )) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the resource.
     *
     * @return mixed
     */
    public function update(?User $user)
    {
        // visitors cannot update
        if ($user === null) {
            return false;
        }

        // -- update own resource
        if ($user->can( $this->abilites )) {

            if( $user->hasRole( RoleProfileService::DENTIST_ADMIN ) ) {
                return true;
            }

            return true;
        }
    }

    /**
     * Determine whether the user can delete the resource.
     *
     * @return mixed
     */
    public function delete(?User $user)
    {
        // visitors cannot delete
        if ($user === null) {
            return false;
        }

        // -- update own resource
        if ($user->can( $this->abilites )) {

            if( $user->hasRole( RoleProfileService::DENTIST_ADMIN ) ) {
                return true;
            }

            // -- user cannot delete resources from others
            if( $user->company_id !== $this->entity->company_id ) {
                return false;
            }

            return true;
        }
    }

    /**
     * Determine whether the user can restore the resource.
     *
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the resource.
     *
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }

}
