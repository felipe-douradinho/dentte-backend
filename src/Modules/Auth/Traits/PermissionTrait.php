<?php

namespace Modules\Auth\Traits;


use JetBrains\PhpStorm\Pure;
use Modules\Auth\Services\RoleProfileService;

/**
 * Trait PermissionTrait
 *
 * @package Modules\Core\Helpers
 */
trait PermissionTrait
{

	/**
	 * Ger permission
	 *
	 * @param string $action
	 * @param string $resource
	 * @param bool $api
	 *
	 * @return string
	 */
	public static function getPermission(string $action, string $resource, bool $api = true) : string
	{
		$resource = $resource ? $resource . '.' : '';
		$prefix = $resource || $api ? ($api ? 'api.' : 'admin.') : '';

		if($api)
			return "{$prefix}{$resource}{$action}";

		return "{$prefix}{$resource}{$action}";
	}

    /**
     * Ger permission
     *
     * @param string $permission
     * @param string $prefix
     * @return string
     */
    public static function getPermissionByRouteName( string $permission, string $prefix = 'api' ) : string
    {
        return "{$prefix}.{$permission}";
    }

	/**
	 * Get all permissions
	 *
	 * @param bool $api
	 *
	 * @return array
	 */
	#[Pure] public static function getAllPermissions(bool $api = false ) : array
	{
		return self::getPermissionsByRole( RoleProfileService::DENTIST_ADMIN, $api ); // admin has all permissions by default
	}

	/**
	 * Get permissions by
	 *
	 * @param string $role
	 * @param bool $api
	 *
	 * @return array
	 */
	#[Pure] public static function getPermissionsByRole(string $role, bool $api = false ) : array
	{
		$permissions = array_key_exists( $role, self::ALL_PERMISSIONS ) ? self::ALL_PERMISSIONS[ $role ] : [ ];
		$output = [ ];

		foreach ($permissions as $action => $resources)
		{
			if(!is_array($resources) && $resources == self::NO_PREFIX)
			{
				$output[] = self::getPermission( $action, '', $api );
				continue;
			}

			foreach($resources as $resource)
			{
				$output[] = self::getPermission( $action, $resource, $api );
			}
		}

		return $output;
	}

}
