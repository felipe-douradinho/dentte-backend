<?php

namespace Modules\Quote\Policies;

use Illuminate\Support\Str;
use Modules\Core\Traits\PolicyTrait;
use Modules\Quote\Entities\QuoteItem;
use Modules\Core\Policies\BasePolicy;
use Modules\User\Entities\User;


class QuoteItemPolicy extends BasePolicy
{
    use PolicyTrait;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->entity_singular_name = Str::snake('QuoteItem');

        $this->entity = QuoteItem::whereId( request()->route()->{$this->entity_singular_name} )->first([
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
     * @return bool|void
     */
    public function update(?User $user)
    {
        return $this->checkUpdateCompanyPolicy($user);
    }

    /**
     * Determine whether the user can delete the resource.
     *
     * @return bool|void
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
