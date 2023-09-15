<?php

namespace Modules\User\Policies;

use Modules\Auth\Services\RoleProfileService;
use Modules\Core\Policies\BasePolicy;
use Modules\User\Entities\User;


class UserPolicy extends BasePolicy
{
    /**
     * Determine whether the user can view the resource.
     *
     * @return mixed
     */
    public function view(?User $user, User $entity)
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

            // -- all users can update their own profile
            if( $user->id != request()->route()->user ) {
                return false;
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

            // -- user cannot delete its own account
            if( $user->id == request()->route()->user ) {
                return false;
            }

            if( $user->hasRole( RoleProfileService::DENTIST_ADMIN ) ) {
                return true;
            }

            return true;
        }
    }

    /**
     * Determine whether the user can restore the resource.
     *
     * @return mixed
     */
    public function restore(User $user, User $entity)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the resource.
     *
     * @return mixed
     */
    public function forceDelete(User $user, User $entity)
    {
        //
    }

}
