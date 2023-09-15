<?php

namespace Modules\Company\Policies;

use Modules\Core\Policies\BasePolicy;
use Modules\User\Entities\User;


class CompanyPolicy extends BasePolicy
{
    /**
     * Determine whether the user can view the resource.
     *
     * @return mixed
     */
    public function view(?User $user)
    {
        // authors can view
        if ($user->can( $this->getAbilityByRequestSegment( __FUNCTION__ ) )) {
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
        $abilites = $this->getAbilityByRequestSegment( __FUNCTION__ );

        // visitors cannot delete
        if ($user === null) {
            return false;
        }

        // -- update own resource
        if ($user->can( $abilites )) {
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
        $abilites = $this->getAbilityByRequestSegment( __FUNCTION__ );

        // visitors cannot delete
        if ($user === null) {
            return false;
        }

        // -- delete own resource
        if ($user->can( $abilites )) {
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
