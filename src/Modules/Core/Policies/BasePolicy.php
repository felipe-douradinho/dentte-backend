<?php

namespace Modules\Core\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Services\RoleProfileService;
use Modules\Core\Traits\PolicyTrait;
use Modules\User\Entities\User;

class BasePolicy
{
    use HandlesAuthorization, PolicyTrait;

    /**
     * @var array $abilities
     */
    protected array $abilites;

    /**
     * @var Model|null $entity
     */
    protected ?Model $entity;

    /**
     * @var string|null $entity_singular_name
     */
    protected ?string $entity_singular_name;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->abilites = $this->getAbilityByRouteName( request()->route()->getName() );
    }

    /**
     * Determine whether the user can view any resources.
     *
     * @return mixed
     */
    public function viewAny(User $user)
    {
        // authors can view
        if ($user->can( $this->abilites )) {
            return true;
        }
    }

    /**
     * Determine whether the user can create resources.
     *
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->can( $this->abilites )) {
            return true;
        }
    }

     /**
     * @param User|null $user
     * @return bool|void
     */
    protected function checkCompanyPolicy( ?User $user )
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
     * @param User|null $user
     * @return bool|void
     */
    protected function checkViewCompanyPolicy( ?User $user )
    {
        return $this->checkCompanyPolicy( $user );
    }

    /**
     * @param User|null $user
     * @return bool|void
     */
    protected function checkUpdateCompanyPolicy( ?User $user )
    {
        return $this->checkCompanyPolicy( $user );
    }

    /**
     * @param User|null $user
     * @return bool|void
     */
    protected function checkDeleteCompanyPolicy( ?User $user )
    {
        return $this->checkCompanyPolicy( $user );
    }

}
