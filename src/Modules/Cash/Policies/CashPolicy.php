<?php

namespace Modules\Cash\Policies;

use Illuminate\Support\Str;
use Modules\Cash\Entities\Cash;
use Modules\Core\Policies\BasePolicy;
use Modules\User\Entities\User;


class CashPolicy extends BasePolicy
{
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->entity_singular_name = Str::snake('Cash');

        $this->entity = Cash::whereId( request()->route()->{$this->entity_singular_name} )->first([
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
        return $this->checkViewCompanyPolicy( $user );
    }

    /**
     * Determine whether the user can update the resource.
     *
     * @return mixed
     */
    public function update(?User $user)
    {
        return $this->checkUpdateCompanyPolicy($user);
    }

    /**
     * Determine whether the user can delete the resource.
     *
     * @return mixed
     */
    public function delete(?User $user)
    {
        return $this->checkDeleteCompanyPolicy($user);
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
