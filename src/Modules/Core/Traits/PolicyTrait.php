<?php

namespace Modules\Core\Traits;

use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Services\PermissionService;
use Modules\User\Entities\User;

trait PolicyTrait
{
    use RequestTrait;

    /**
     * Left:    Controller method
     * Right:   Policy class method
     *
     * @var array|string[] $abilites_mapping
     */
    public array $abilites_mapping = [
        'viewAny'   => PermissionService::ACTION_LIST,
        'view'      => PermissionService::ACTION_SHOW,
        'create'    => PermissionService::ACTION_CREATE,
        'update'    => PermissionService::ACTION_UPDATE,
        'delete'    => PermissionService::ACTION_DESTROY,
    ];

    /**
     * @param string $action
     * @param string|null $segment
     * @return array
     */
    public function getAbilityByRequestSegment( string $action, string $segment = null ) : array
    {
        return $segment ?
            $this->getAbilityByResource( $action, $segment ) :
            $this->getAbilityByResource( $action, $this->getLastSegment() );
    }

    /**
     * @param string $route_name
     * @param string $prefix
     * @return array
     */
    public function getAbilityByRouteName( string $route_name, string $prefix = 'api' ) : array
    {
        $permission = PermissionService::getPermissionByRouteName(
            $route_name,
            $prefix
        );

        return [
            $permission
        ];
    }

    /**
     * @param string $action
     * @param string $resource
     * @return array
     */
    public function getAbilityByResource( string $action, string $resource ) : array
    {
        if( !array_key_exists( $action, $this->abilites_mapping ) ) {
            return [ ];
        }

        $permission = PermissionService::getPermission(
            $this->abilites_mapping[ $action ],
            $resource
        );

        return [
            $permission
        ];
    }

    /**
     * @param User|null $user
     * @param Model $entity
     * @param string $user_field
     * @return bool
     */
    public function isResourceFromUser( ?User $user, Model $entity, string $user_field = 'user_id' ) : bool {
        return $user && $user->id == $entity->$user_field;
    }

}
