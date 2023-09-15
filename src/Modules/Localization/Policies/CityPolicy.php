<?php

namespace Modules\Localization\Policies;

use Illuminate\Support\Str;
use Modules\Auth\Services\RoleProfileService;
use Modules\Core\Policies\BasePolicy;
use Modules\Localization\Entities\City;
use Modules\User\Entities\User;


class CityPolicy extends BasePolicy
{
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->entity_singular_name = Str::snake('City');

        $this->entity = City::whereId( request()->route()->{$this->entity_singular_name} )->first([
            'id',
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
        return false;
    }

    /**
     * Determine whether the user can delete the resource.
     *
     * @return mixed
     */
    public function delete(?User $user)
    {
        return false;
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
